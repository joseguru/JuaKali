<?php

class User extends Eloquent {

    public static $timestamps = true;
    public static $hidden = array('password');
    use Stapler\stapler;

    public function __construct($attributes = array(), $exists = false)
    {
        parent::__construct($attributes, $exists);

        $this->has_attached_file('avatar', [
            'styles' => [
                'medium' => '300x300',
                'thumb' => '100x100'
            ]
        ]);
    }

    public function messages()
    {
        return $this->has_many('Message');
    }

    public function roles()
    {
        return $this->has_many_and_belongs_to('Role');
    }

    public static function update_user()
    {
        $id = Auth::user()->id;
        $rules = array(
                'username' => 'required|min:2',
                'email' => 'required|email',
            );
        $validation = Validator::make(Input::except('avatar'), $rules);
        if($validation->fails())
        {
            return Redirect::to_route('edit_user', $id)->with_input()->with_errors($validation);
        }
        $user = User::find($id);
        $user->update($id, Input::except('avatar'));

        return Redirect::to_route('edit_user', $id)->with('success_status', 'Profile Updated.');
    }

}
