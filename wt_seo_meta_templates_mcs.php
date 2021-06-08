<?php
/**
 * @package     WT SEO Meta templates - My City Selector plugin provider
 * @version     1.0.0
 * @Author Sergey Tolkachyov, https://web-tolk.ru
 * @copyright   Copyright (C) 2020 Sergey Tolkachyov
 * @license     GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
 * @since       1.0
 */
// No direct access
defined( '_JEXEC' ) or die;
use Joomla\CMS\Application\CMSApplication;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Plugin\PluginHelper;
use activeprogramming\mcs\plugin\helpers\McsData;
use Joomla\CMS\Profiler\Profiler;

class plgSystemWt_seo_meta_templates_mcs extends CMSPlugin
{
	public function __construct( &$subject, $config )
	{

		parent::__construct( $subject, $config );
		$this->loadLanguage();
	}


	public function onWt_seo_meta_templatesAddVariables(){
		!JDEBUG ?: Profiler::getInstance('Application')->mark('<strong>plg WT SEO Meta templates - My City Selector provider plugin</strong>: start');
				// My City Selector
				// название текущей локации (если выбран город, то название города;
				// если выбрана область, то название области)
				$variables[] = [
					'variable' => 'MCS_LOCATION_NAME',
					'value'    => McsData::get('locationName'),
				];

				// My City Selector
				// город по умолчанию (указанный в настройках расширения)
				$variables[] = [
					'variable' => 'MCS_DEFAULT_CITY',
					'value'    => McsData::get('default_city'),
				];

				/*
				 *  Страны в падежах
				 */

				// My City Selector
				// название текущей страны
				$variables[] = [
					'variable' => 'MCS_COUNTRY_NAME',
					'value'    => McsData::get('countryName'),
				];

				// My City Selector
				// Страна в родительном падеже (Омска)
				$variables[] = [
					'variable' => 'MCS_COUNTRY_GENITIVE',
					'value'    => McsData::get('countryGenitive'),
				];

				// My City Selector
				// Страна в дательном падеже (Омску)
				$variables[] = [
					'variable' => 'MCS_COUNTRY_DATIVE',
					'value'    => McsData::get('countryDative'),
				];

				// My City Selector
				// Страна в винительном падеже (Омск)
				$variables[] = [
					'variable' => 'MCS_COUNTRY_ACCUSATIVE',
					'value'    => McsData::get('countryAccusative'),
				];

				// My City Selector
				// Страна в творительном падеже (Омском)
				$variables[] = [
					'variable' => 'MCS_COUNTRY_ABLATIVE',
					'value'    => McsData::get('countryAblative'),
				];

				// My City Selector
				// Страна в предложном падеже (Омске)
				$variables[] = [
					'variable' => 'MCS_COUNTRY_PREPOSITIONAL',
					'value'    => McsData::get('countryPrepositional'),
				];

				/*
				 * Регионы
				 */

				// My City Selector
				// название текущей области в базе (Омская область)
				$variables[] = [
					'variable' => 'MCS_PROVINCE_NAME',
					'value'    => McsData::get('provinceName'),
				];

				// My City Selector
				// Регион в родительном падеже (Омска)
				$variables[] = [
					'variable' => 'MCS_PROVINCE_GENITIVE',
					'value'    => McsData::get('provinceGenitive'),
				];

				// My City Selector
				// Регион в дательном падеже (Омску)
				$variables[] = [
					'variable' => 'MCS_PROVINCE_DATIVE',
					'value'    => McsData::get('provinceDative'),
				];

				// My City Selector
				// Регион в винительном падеже (Омск)
				$variables[] = [
					'variable' => 'MCS_PROVINCE_ACCUSATIVE',
					'value'    => McsData::get('provinceAccusative'),
				];

				// My City Selector
				// Регион в творительном падеже (Омском)
				$variables[] = [
					'variable' => 'MCS_PROVINCE_ABLATIVE',
					'value'    => McsData::get('provinceAblative'),
				];

				// My City Selector
				// Регион в предложном падеже (Омске)
				$variables[] = [
					'variable' => 'MCS_PROVINCE_PREPOSITIONAL',
					'value'    => McsData::get('provincePrepositional'),
				];



				/*
				 * Города в падежах
				 */

				// My City Selector
				// Город в именительном падеже (Омск)
				$variables[] = [
					'variable' => 'MCS_CITY_NAME',
					'value'    => McsData::get('cityName'),
				];

				// My City Selector
				// Город в родительном падеже (Омска)
				$variables[] = [
					'variable' => 'MCS_CITY_GENITIVE',
					'value'    => McsData::get('cityGenitive'),
				];

				// My City Selector
				// Город в дательном падеже (Омску)
				$variables[] = [
					'variable' => 'MCS_CITY_DATIVE',
					'value'    => McsData::get('cityDative'),
				];

				// My City Selector
				// Город в винительном падеже (Омск)
				$variables[] = [
					'variable' => 'MCS_CITY_ACCUSATIVE',
					'value'    => McsData::get('cityAccusative'),
				];

				// My City Selector
				// Город в творительном падеже (Омском)
				$variables[] = [
					'variable' => 'MCS_CITY_ABLATIVE',
					'value'    => McsData::get('cityAblative'),
				];

				// My City Selector
				// Город в предложном падеже (Омске)
				$variables[] = [
					'variable' => 'MCS_CITY_PREPOSITIONAL',
					'value'    => McsData::get('cityPrepositional'),
				];

			$data = array(
				'variables' => $variables,
				'seo_tags_templates' => '',
			);
		!JDEBUG ?: Profiler::getInstance('Application')->mark('<strong>plg WT SEO Meta templates - My City Selector provider plugin</strong>: before return data');
		return $data;

	}

}//plgSystemWt_seo_meta_templates_mcs