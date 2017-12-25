# Laravel Package

This package provides you with a simple tool to set up Kendo UI into your project

## Installation

### require

`composer require basalam/laravel-kendo-ui:dev-msater`

In project composer.json
```json
    "require": {
	    "basalam/laravel-kendo-ui": "1.0"
	},
    "repositories": [
	  {
		"type": "vcs",
		"url": "git@github.com:Basalam/Laravel_Kendu_Ui.git"
	  }
	]
   ``` 
After that from application directory in terminal:
    php composer.phar update
    
When package downloaded, add the service provider in `config/app.php` at the end of "providers" array:

    'Kendo\KendoUIServiceProvider',
    
And as last run command in terminal to copy assets from package into "public" directory:

    php artisan vendor:publish --tag=public --force

## Usage

### Basic css:
```html

    <link href="{{ asset('vendor/basalam/css/web/kendo.common.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/basalam/css/web/kendo.default.min.css') }}" rel="stylesheet" />
```
### Basic js:
```html

    <script src="{{ asset('vendor/basalam/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/basalam/js/kendo.all.min.js') }}"></script>
 ```
### PHP usage example (Chart):

```php

    $errorBars = new \Kendo\Dataviz\UI\ChartSeriesItemErrorBars();
    $errorBars -> value('stddev');

    $series = new \Kendo\Dataviz\UI\ChartSeriesItem();
    $series->data(array(7.943, 7.848, 9.284, 9.263, 9.801, 3.890, 8.238, 9.552))
           ->errorBars($errorBars);

    $valueAxis = new \Kendo\Dataviz\UI\ChartValueAxisItem();

    $valueAxis->labels(array('format' => '{0}%'))
              ->line(array('visible' => false))
              ->axisCrossingValue(0);

    $categoryAxis = new \Kendo\Dataviz\UI\ChartCategoryAxisItem();
    $categoryAxis->categories(array(2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010))
                 ->line(array('visible' => false));

    $tooltip = new \Kendo\Dataviz\UI\ChartTooltip();
    $tooltip->visible(true)
            ->format('{0}%')
            ->template('#= value # (σ = #= kendo.toString(high - low, "N2") #)');

    $chart = new \Kendo\Dataviz\UI\Chart('chart');
    $chart->title(array('text' => 'GDP growth and standard deviation'))
          ->legend(array('visible' => false))
          ->addSeriesItem($series )
          ->addValueAxisItem($valueAxis)
          ->addCategoryAxisItem($categoryAxis)
          ->tooltip($tooltip)
          ->seriesDefaults(array('type' => 'area'));

    echo $chart->render();
```
