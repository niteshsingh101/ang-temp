<?php include("header.php");?>

<body ng-app="myApp">

<div id="art-main" ng-controller="Myctrl">
    <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
	<ul class="art-hmenu">
		<li>
			<a href="#/" class="active">Home</a>
		</li>	
		<li>
			<a href="#">About</a>
		</li>	
	</ul>
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                <div class="art-logo">
                                 <h1 class="art-logo-name"><a href="#">{{headline}}</a></h1>
                                                 <h2 class="art-logo-text">{{slogan}}</h2>
                                </div>
                </div>
            </div>
        </div>
        
    </div>
<div ng-view></div>

<script>
var app= angular.module('Myapp', []);
app.controller('Myctrl', function($scope){
$scope.headline='Dummy Heading Text';
$scope.slogan='Dummy Slogan text';
});
</script>


<p>Click on the links to navigate to "red.htm", "green.htm", "blue.htm", or back to "main.htm"</p>
</body>
</html>