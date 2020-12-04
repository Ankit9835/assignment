<!--
|--------------------------------------------------------------------------
| resources/views/layouts/frontend.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Assignment</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://bootswatch.com/3/readable/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Lecture 5 -->
        
        <!-- Lecture 17 -->
        <script>
        var base_url = '{{ url('/') }}';
        </script>
        
    </head>
    <body>

       
        <div class="jumbotron">
            <div class="container">
                <h1>Assignment</h1>
              
                <form class = "mt-5" method="POST" <?php /* Lecture 18 */?> action="" class="form-inline">
                    <div class="form-group">
                        <label class="sr-only" for="city">City</label>
                        <input name="city" value="{{ old('city') /* Lecture 19 */ }}" type="text" class="form-control autocomplete" id="city" placeholder="City">
                    </div>
                    
                   
                    <!-- <button type="submit" class="btn btn-warning">Search</button> -->
                    
                    
                  
                {{ csrf_field() }}  
                    
                </form>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            
            $(function () {
                $(".autocomplete").autocomplete({
                    source: base_url + "/searchCities", /* Lecture 17 */
                    minLength: 2,
                    select: function (event, ui) {
                        
            //            console.log(ui.item.value);
                    }


                });
});

        </script>

       

        
       

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
    </body>
</html>

