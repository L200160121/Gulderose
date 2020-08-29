<ul class="list-group">
      <li class="list-group-item">
            <span class="badge load_sample_widget" data-origin="1158" data-destination="2401"><i class="fa fa-spin fa-spinner"></i></span>
            Ongkir Lokal 1: (Banguntapan, Bantul, DI Yogyakarta -&gt; Kaliwungu, Kudus)
      </li>
      <li class="list-group-item money-format">
            <span class="badge load_sample_widget" data-origin="1158" data-destination="2401"><i class="fa fa-spin fa-spinner"></i></span>
            Ongkir Lokal 1: (Banguntapan, Bantul, DI Yogyakarta -&gt; Kaliwungu, Kudus) dengan format uang
      </li>
      <li class="list-group-item plus-thousand">
            <span class="badge load_sample_widget" data-origin="1158" data-destination="2401"><i class="fa fa-spin fa-spinner"></i></span>
            Ongkir Lokal 1: (Banguntapan, Bantul, DI Yogyakarta -&gt; Kaliwungu, Kudus) dengan tambahan biaya Rp. 1,000
      </li>
</ul>
<script type="text/javascript" src="http://shipping.fisip.net/widget?class=load_sample_widget"></script>
<script type="text/javascript">
      (function() {
            window.addEventListener('load', function() {
                  // Money Format
                  $('.money-format .load_sample_widget').on('done', function() {
                        $(this).html(parseInt($(this).html()).toLocaleString());
                  });
                  // Plus Result
                  $('.plus-thousand .load_sample_widget').on('done', function() {
                        var a = parseInt($(this).html()) + 1000;
                        $(this).html(a.toLocaleString());
                  });
            }, false);
      })();
</script>