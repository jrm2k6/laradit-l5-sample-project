<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use JD\Laradit\Facades\LaraditAuth;

class LaraditScriptAuthenticationCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'laradit:script_auth';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Commands to test Laradit Script Auth';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$scriptAuth = LaraditAuth::getScriptAuthenticationManager();
		$this->info($scriptAuth->getRequestToken()->getBody()->getContents());
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
		];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
		];
	}

}
