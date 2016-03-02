    // then with a couple of manual re-arrangements to be alphabetical
    // then changed Kazakhstan from +76 to +7
    // then manually removed quotes from property names as not required
    // Note: using single char property names to keep filesize down
    // n = name
    // i = iso2 (2-char country code)
    // d = dial code
	var allCountries = $.each([ {
        n: "Russia (Россия)",
        i: "ru",
        d: "7"
    }, {
        n: "United Kingdom",
        i: "gb",
        d: "44"
    }, {
        n: "United States",
        i: "us",
        d: "1"
    }], function(i, c) {
        c.name = c.n;
        c.iso2 = c.i;
        c.dialCode = c.d;
        delete c.n;
        delete c.i;
        delete c.d;
    });