<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP on Pivotal Cloud Foundry</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <style>
            .param_value{
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">        
            <h1>PHP on Pivotal Cloud Foundry v2</h1>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr><th>Param</th><th>Value</th></tr>
                        </thead>
                        <tbody>
                            <tr><td><strong>My App Version</strong></td><td><span class="param_value">v2</span></td></tr>
                            <tr><td><strong>phpversion()</strong></td><td><span class="param_value"><?php echo phpversion(); ?></span></td></tr>
                            <tr><td><strong>get_loaded_extensions()</strong></td><td><span class="param_value"><?php echo implode(", ", get_loaded_extensions() ); ?></span></td></tr>
                            <tr><td><strong>$_SERVER["SERVER_SOFTWARE"]</strong></td><td><span class="param_value"><?php echo $_SERVER["SERVER_SOFTWARE"]; ?></span></td></tr>
                            <tr><td><strong>$_ENV["CF_INSTANCE_INDEX"]</strong></td><td><span class="param_value"><?php echo $_ENV["CF_INSTANCE_INDEX"]; ?></span></td></tr>
                        </tbody>
                    </table>
                </div>
            </div><!-- close row -->
        </div><!-- close container -->
    </body>
</html>
