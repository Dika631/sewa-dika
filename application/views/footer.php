<div class="footer-grid">
    <div class="container">
        <div class="col-md-3 re-ft-grd">
            <h3>Kategori Sewa</h3>
            <ul class="categories">
              <?php $kategori = $this->all_model->get_where(array(), 'kategori');
                    foreach ($kategori as $key => $value) {
                        echo '<li><a href="'.base_url('produk/kategori/'.$value->kategori_id).'">'.$value->nama_kategori.'</a></li>';
                    }
              ?>
            </ul>
        </div>
        <div class="col-md-7 re-ft-grd">
            <h3>Social Media</h3>
            <ul class="social">
                <li><a href="https://web.whatsapp.com/" class="twt">Whatsapp</a></li>
                <li><a href="https://www.instagram.com/dhikacapriawan27/" class="gpls">Instagram</a></li>
                <li><a href="https://mail.google.com/mail/u/0/#inbox" class="gpls">Email</a></li>
                <div class="clearfix"></div>
            </ul>
        </div>
        <!-- <div class="col-md-2 re-ft-grd">
            <div class="bt-logo">
                <div class="logo">
                    <a href="index.html" class="ft-log">bB</a>
                </div>
            </div>
        </div> -->
<div class="clearfix"></div>
    </div>
    <div class="copy-rt">
        <div class="container">
    <p> Copyright&copy; 2020 Dika Capriawan All Rights Reserved
        </div>
    </div>
</div>
</body>
</html>
