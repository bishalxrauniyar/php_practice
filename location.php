<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Geo City Locator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <div>Country: <span id="country"></span></div>
    <div>State: <span id="state"></span></div>
    <div>City: <span id="city"></span></div>
    <div>Latitude: <span id="latitude"></span></div>
    <div>Longitude: <span id="longitude"></span></div>
    <div>IP: <span id="ip"></span></div>
    <script>
        $.getJSON('https://geolocation-db.com/json/')
            .done(function(location) {
                $('#country').html(location.country_name);
                $('#state').html(location.state);
                $('#city').html(location.city);
                $('#latitude').html(location.latitude);
                $('#longitude').html(location.longitude);
                $('#ip').html(location.IPv4);
            });
    </script>
</body>

</html>