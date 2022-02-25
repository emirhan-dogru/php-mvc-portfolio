<ul>
    <li><a href="{{ App\Models\Settings::select('facebook')->where('id' , 1)->first()->facebook }}" target="_blank"><img class="svg" src="assets/img/svg/social/facebook.svg" alt="" /></a></li>
    <li><a href="{{ App\Models\Settings::select('twitter')->where('id' , 1)->first()->twitter }}" target="_blank"><img class="svg" src="assets/img/svg/social/twitter.svg" alt="" /></a></li>
    <li><a href="{{ App\Models\Settings::select('instagram')->where('id' , 1)->first()->instagram }}" target="_blank"><img class="svg" src="assets/img/svg/social/instagram.svg" alt="" /></a></li>
    <li><a href="{{ App\Models\Settings::select('website')->where('id' , 1)->first()->website }}" target="_blank"><img class="svg" src="assets/img/svg/social/dribbble.svg" alt="" /></a></li>
    <li><a href="{{ App\Models\Settings::select('github')->where('id' , 1)->first()->github }}" target="_blank"><img class="svg" src="assets/img/svg/social/tik-tok.svg" alt="" /></a></li>
</ul>