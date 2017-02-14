#Installation
In your `composer.json` add the follow lines

	"repositories": [
	        {
	            "type": "vcs",
	            "url": "https://github.com/danielmadu/array"
	        }
	    ],
	    "require": {
	        "phpol/Arr": "dev-master"
	    }
	}

You can now install the dependency by running `composer install`

#Usage

	use OL\Arr\Arr;

	$array = new Arr([1,2,3]);
	$newArray = $array->map(function($value) {
		return $value + 1;
	});
