<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- First column is blank, 3 columns for Links   -->
            <div class="col-4 col-sm-2 offset-1">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=products">Products</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="col-7 col-sm-3">
                <h5>Our Address</h5>
                <address>
                    268 Ly Thuong Kiet<br>
                    Phuong 14, Quan 10<br>
                    Ho Chi Minh City<br>
                    <i class="fa fa-phone fa-md me-2"></i> 028 3864 7256<br>
                    <i class="fa fa-print fa-md me-2"></i> 028 3864 7256<br>
                    <i class="fa fa-envelope fa-md me-2"></i> <a href="mailto:oisp@hcmut.edu.vn">oisp@hcmut.edu.vn</a>
                </address>
            </div>

            <!-- Added google map -->
            <div class="col-12 col-sm-3 align-self-center">
                <div id="googleMap" style="width:100%;height:300px;"></div>
            </div>

            <!-- Added some fancy button for fun! -->
            <div class="col-12 col-sm-3 align-self-center">
                <div class="text-center">
                    <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube fa-lg"></i></a>
                    <a class="btn btn-social-icon btn-google" href="mailto:"><i class="fa fa-envelope-o fa-lg"></i></a>
                </div>
            </div>

        </div>
    </div>

</footer>

<!-- google js map API -->
<script>
    function myMap() {
        const myLatLng = new google.maps.LatLng(10.7721,106.6579);
        var mapProp= {center:myLatLng,
                      zoom:17,};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({position: myLatLng, map, title:"Welcome to HCMUT!"});
        }
</script>

<!-- source with API key to enable -->
<script src=""></script>
