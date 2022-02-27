<ul class="transition_link">
    <li {{ now_url() == '' ? 'class=active' : '' }}><a href="{{ base_url() }}">Anasayfa</a></li>
    <li {{ now_url() == 'hakkimda' ? 'class=active' : '' }}><a href="{{ base_url('hakkimda') }}">Hakkımda</a></li>
    <li {{ now_url() == 'portfolio' ? 'class=active' : '' }}><a href="{{ base_url('portfolio') }}">Portfolyo</a></li>
    <li {{ now_url() == 'yazilarim' ? 'class=active' : '' }}><a href="{{ base_url('yazilarim') }}">Yazılarım</a></li>
    <li {{ now_url() == 'iletisim' ? 'class=active' : '' }}><a href="{{ base_url('iletisim') }}">İletişim</a></li>
</ul>