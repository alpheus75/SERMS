<!doctype html>
<html>
  <head>
    <title>
      SOS sender
    </title>

    <!-- We're using jQuery to simplify our JavaScript DOM-
    handling code -->
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>

    <script language="javascript">

      // This function is called when the Geolocation API successfully retrieves the user's location
      function savePosition(point) {

        // Send the retrieved coordinates to callback.php via a POST request, and then set the page content to"Location saved" once this process is complete (or "We couldn't save your location"if it failed for some reason)
        $.ajax({
          url: 'SOS_connect.php',
          type: 'POST',
          data:   {
            latitude: point.coords.latitude,
            longitude: point.coords.longitude
          },
          statusCode: {
            500: function() {
              $('#locationpane').html
              ('<p>We couldn\'t save your location.</p>');
            }
          }
        }).done(function() {
          $('#locationpane').html
          ('<p>SOS Received. Hung on as we try to help</p>');
        }).fail(function() {
          $('#locationpane').html
          ('<p>We couldn\'t save your location.</p>');
        });

      }

      // This function is called when there is a problem retrieving the user's location (but the Geolocation API is supported in his or her browser)
      function errorPosition(error) {
        switch(error.code) {

        // Error code 1: permission to access the user's location was denied
        case 1: $('#locationpane').html
        ('<p>No location was retrieved.</p>');
        break;

        // Error code 2: the user's location could not be determined
        case 2: $('#locationpane').html
        ('<p>We couldn\'t find you.</p>');
        break;

        // Error code 3: the Geolocation API timed out
        case 3: $('#locationpane').html
        ('<p>We took too long trying to find your location.</p>');
        break;

      }
    }

    </script>

  </head>
  <body>

    <div id="locationpane">

      <p>
        Sending SOS ...
      </p>

    </div>

    <!-- Geolocation API code icluded at the bottom of the page so that page content will have loaded first -->
    <script language="javascript">

      // First, check if geolocation support is available
      if (navigator.geolocation) {

        // If it is, attempt to get the current position. Instantiate
        // the savePosition function if the operation was successful, or errorPosition if it was not.
        navigator.geolocation.getCurrentPosition(savePosition, errorPosition);

      } else {

        // If the browser doesn't support the Geolocation API, tell the user.
        $('#locationpane').html
        ('<p>No geolocation support is available.</p>');

      }

    </script>

  </body>
</html>