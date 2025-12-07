<?php

namespace zakariatlilani\LaravelMinify;

use zakariatlilani\LaravelMinify\BladeCompiler\ExcludeMinifyBladeCompiler;
use Illuminate\Support\Facades\Facade;

class LaravelMinifyFacade extends Facade
{

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor(): string
	{
		return 'laravel-minify';
	}

	/**
	 * @param $html
	 * @return string
	 */
	public static function htmlMinify(?string $html = NULL): string
	{
		return (new LaravelMinify())->htmlMinify((string) $html);
	}

	/**
	 * @param $html
	 * @return string
	 */
	public static function excludeHtmlMinify(?string $html = NULL): string
	{
		return ExcludeMinifyBladeCompiler::EXCLUDESTART . (string) $html . ExcludeMinifyBladeCompiler::EXCLUDEEND;
	}
}
