<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Searches\UserSearch\UserSearch;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Retrieve the Users in the system as a paginated lsit filetered
     * by the criteria managed in the UserSearch function
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(Request $request)
    {
        $user_list = UserSearch::apply($request);

        if ($request->has('recordsPerPage')) {
            $recordsPerPage = $request->recordsPerPage;
        } else {
            $recordsPerPage = 5;
        }
        return $user_list->paginate($recordsPerPage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function show($id)
    {
        /*
         * ->with('roles')->with('permissions')->first()
         */
        $user = User::where('id', $id)
            ->with('roles')
            ->with('permissions')
            ->with('userUserType.userType')
            ->with('userUserType.userTypeStatus')
            ->with('notificationPreference')
            ->first();
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        /*
         * AGP validate first and last names rather than just name
         */
        $request->validateWithBag('updateProfileInformation', [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        /*
         * AGP use first and last name concatenation
         */
        if ($request['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $request);
        } else {
            $user->forceFill([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'name' => $request['first_name'] . ' ' . $request['last_name'],
                'email' => $request['email'],
            ])->save();
        }
    }

    protected function updateVerifiedUser($user, Request $request)
    {
        $user->forceFill([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'name' => $request['first_name'] . ' ' . $request['last_name'],
            'email' => $request['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }

    /**
     * Retrieve the Phone numbers and types for this User
     *
     * @param $user_id
     * @return \Illuminate\Support\Collection|null
     */
    public function getUserPhones($user_id)
    {
        $user = User::where('id', $user_id)->first();
        if (!is_null($user)) {
            $user_phones = DB::table('phone_user')
                ->join('users', 'phone_user.user_id', '=', 'users.id')
                ->join('phones', 'phone_user.phone_id', '=', 'phones.id')
                ->join('countries', 'phones.country_id', '=', 'countries.id')
                ->join('phone_types', 'phone_user.phone_type_id', '=', 'phone_types.id')
                ->select('users.id', 'phone_types.*', 'phones.*', 'countries.country', 'countries.international_dialling_code', 'countries.international_dialling_code_formatted', 'phone_user.preferred_contact_number')
                ->where('users.id', '=', $user_id)
                ->get();

            return $user_phones;
        } else {
            return null;
        }
        // return Address::where('user_id',$user_id)->get();
    }

    /**
     * Retrieve the Spatie roles assigned to this User
     *
     * @param $user_id
     * @return mixed
     */
    public function getUserRoles($user_id)
    {
        $user = User::where('id', $user_id)->first();
        return $user->getRoleNames();
    }

    /**
     * Retrieve the Spatie permissions assigned to this User
     *
     * @param $user_id
     * @return mixed
     */
    public function getUserPermissions($user_id)
    {
        $user = User::where('id', $user_id)->first();
        return $user->getPermissionNames();
    }

    public function checkUserExists($email)
    {
        $userFound = User::where('email', $email)->first();
        if (!$userFound) {
            return false;
        } else {
            $user = User::where('id', $userFound->id)
                ->with('roles')
                ->with('permissions')
                ->with('userUserType.userType')
                ->with('userUserType.userTypeStatus')
                ->with('notificationPreference')
                ->first();
            return $user;

        }
    }

}
