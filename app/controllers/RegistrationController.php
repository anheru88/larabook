 <?php

class RegistrationController extends \BaseController {

	/**
	 * Show the form for register the user.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	/**
	 * Create a new Larabook User
	 *
	 * @return string
	 */
	public function store()
	{
		return Redirect::home();
	}
}
