<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Klustering Data Mining UTS</title>

    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">Klustering<em> Data Mining</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">Dashboard</a></li>
                            <li><a href="/blog"class="active">Klusterisasi</a></li>
                            <li><a href="/tentang">Tentang</a></li>
                            <li><a href="/tim">Tim</a></li>
                            <li><a href="/contact">Kontak</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <!-- ***** Header Area End ***** -->

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/KelompokDatMin.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Halaman <em>Klustering</em></h2>
                        <p>Penjelasan dari Hasil Klusterisasi teks<p>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <section class='tabs-content'>
                    <article>

                        <h4>Klustering teks Palestina </h4>

                        <p><i class="fa fa-user"></i> Zidan &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 25.10.2023 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  115 comments</p>

<div class="jp-OutputPrompt jp-OutputArea-prompt">Data yang digunakan </div>

<br>
<br>


<style scoped>
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe" style='font-size: 10px;'>
  <thead>
    <tr style="text-align: right; font-size: 10px;">
      <th></th>
      <th>full_text</th>
      <th>created_at</th>
      <th>id_str</th>
      <th>quote_count</th>
      <th>reply_count</th>
      <th>retweet_count</th>
      <th>favorite_count</th>
      <th>lang</th>
      <th>user_id_str</th>
      <th>conversation_id_str</th>
      <th>username</th>
      <th>tweet_url</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>0</th>
      <td>I can't see a war between two countries. Israe...</td>
      <td>Tue Oct 24 15:13:39 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>en</td>
      <td>99350386</td>
      <td>1716840000000000000</td>
      <td>Mcoplin1</td>
      <td>https://twitter.com/Mcoplin1/status/1716835350...</td>
    </tr>
    <tr>
      <th>1</th>
      <td>@Forbes Free palestine</td>
      <td>Tue Oct 24 15:13:39 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>et</td>
      <td>1618920000000000000</td>
      <td>1716760000000000000</td>
      <td>larahussein2008</td>
      <td>https://twitter.com/larahussein2008/status/171...</td>
    </tr>
    <tr>
      <th>2</th>
      <td>Now I know why hitla cleaned y’all out free Pa...</td>
      <td>Tue Oct 24 15:13:39 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>en</td>
      <td>1570910000000000000</td>
      <td>1716840000000000000</td>
      <td>K26606487</td>
      <td>https://twitter.com/K26606487/status/171683534...</td>
    </tr>
    <tr>
      <th>3</th>
      <td>@Adii__here @goddeketal Their going to flatten...</td>
      <td>Tue Oct 24 15:13:39 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>en</td>
      <td>1397610000000000000</td>
      <td>1716820000000000000</td>
      <td>PettyJeb</td>
      <td>https://twitter.com/PettyJeb/status/1716835348...</td>
    </tr>
    <tr>
      <th>4</th>
      <td>@DrLoupis You seemed fine when it was just pal...</td>
      <td>Tue Oct 24 15:13:39 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>en</td>
      <td>1708120000000000000</td>
      <td>1716770000000000000</td>
      <td>Etown307</td>
      <td>https://twitter.com/Etown307/status/1716835348...</td>
    </tr>
    <tr>
      <th>...</th>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
      <td>...</td>
    </tr>
    <tr>
      <th>95</th>
      <td>@M1das_OW2 Guys is this considered a hit tweet.</td>
      <td>Tue Oct 24 15:13:10 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>en</td>
      <td>1471650000000000000</td>
      <td>1716550000000000000</td>
      <td>G0thyc_Enc0re</td>
      <td>https://twitter.com/G0thyc_Enc0re/status/17168...</td>
    </tr>
    <tr>
      <th>96</th>
      <td>@NPR I used to love listening. until I read th...</td>
      <td>Tue Oct 24 15:13:10 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>en</td>
      <td>929603000000000000</td>
      <td>1716840000000000000</td>
      <td>lyricalili</td>
      <td>https://twitter.com/lyricalili/status/17168352...</td>
    </tr>
    <tr>
      <th>97</th>
      <td>@France24_en @FRANCE24 @andyhilliar @cloviscas...</td>
      <td>Tue Oct 24 15:13:10 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>1</td>
      <td>0</td>
      <td>1</td>
      <td>fr</td>
      <td>786536000000000000</td>
      <td>1716750000000000000</td>
      <td>sharaf146</td>
      <td>https://twitter.com/sharaf146/status/171683522...</td>
    </tr>
    <tr>
      <th>98</th>
      <td>@JoeBiden Why are you still sending money to U...</td>
      <td>Tue Oct 24 15:13:10 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>en</td>
      <td>1695100000000000000</td>
      <td>1716830000000000000</td>
      <td>ElonPayMyBills</td>
      <td>https://twitter.com/ElonPayMyBills/status/1716...</td>
    </tr>
    <tr>
      <th>99</th>
      <td>Why is india there India sent aid to Palestine 😂</td>
      <td>Tue Oct 24 15:13:10 +0000 2023</td>
      <td>1716840000000000000</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>en</td>
      <td>1695270000000000000</td>
      <td>1716840000000000000</td>
      <td>Dmitriunkin</td>
      <td>https://twitter.com/Dmitriunkin/status/1716835...</td>
    </tr>
  </tbody>
</table>
<p>100 rows × 12 columns</p>

<pre>
<b style='font-size: 20px;'>Jumlah data permasing masing cluster : </b>

0    1565
2     749
1     161
Name: cluster, dtype: int64</pre>

<br>

<pre >
<b style='font-size: 20px;'>Persebaran 20 data pertama : </b>
</pre>

<pre>

0     2
1     1
2     0
3     0
4     2
5     0
6     0
7     2
8     0
9     1
10    0
11    0
12    0
13    2
14    2
15    0
16    0
17    0
18    0
19    0
Name: cluster, dtype: int32</pre>

<br>

<pre><b style='font-size: 20px;'>Contoh data permasing masing cluster </b>

Cluster 0 :
2    Now I know why hitla cleaned y’all out free Pa...
3    @Adii__here @goddeketal Their going to flatten...
5    @RepDonaldsPress You’re deep state. don’t pret...
6               @jacksonhinklle Palestine should burn!
8    @MrAndyNgo Maybe we ship them all off to Pales...
Name: full_text, dtype: object


Cluster 1 :
1                                @Forbes Free palestine
9     From the river to the sea. Palestine will be f...
29      @fakhrifadzli Palestine will be free !!! 🇵🇸🇵🇸🇵🇸
51                       @LauraLoomer FREE PALESTINE 🇵🇸
86             @MyLordBebo Free Palestine.... Free Gaza
Name: full_text, dtype: object


Cluster 2 :
0     I can&#39;t see a war between two countries. Israe...
4     @DrLoupis You seemed fine when it was just pal...
7     How it feels retweeting your nugu fav&#39;s comeba...
13    I&#39;m still waiting for the DA leader. John Stee...
14    @jjhawktree @Rfc1872I @Sirloum @SkyNews You gu...
Name: full_text, dtype: object
</pre>
<br>
<pre>
<b style='font-size: 20px;'>Grafik Hasil Klustering K-MEANS :</b>
<img src="assets/images/clustering.png" alt="">
</pre>
</div>

</div>


                    </article>

    <!-- ***** Blog End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2023 UTS Data Mining SZLO
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>