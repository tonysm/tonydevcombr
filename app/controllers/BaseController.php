<?php

use Illuminate\Routing\Controller;

abstract class BaseController extends Controller
{
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    /**
     * @param string $view
     * @param array $data = []
     * @return mixed
     */
    protected function render($view, $data = [])
    {
        return View::make($view, $data);
    }

}
