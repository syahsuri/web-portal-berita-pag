@extends('homepage.layouts.main')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="post-thumb">
                        <img src="https://pertaarungas.pertamina.com/gambar/7fdeca8ba02980212ec63de025c07bc0.JPG"
                            class="img-responsive post-image" alt="" />
                    </div>
                    <h1>
                        Pertamina Dukung Pengembangan KEK Arun Lhokseumawe Menuju Kawasan
                        Industri Hijau
                    </h1>
                    <div class="date">
                        <ul>
                            <li>
                                By<a title="" href="#"><span>Jone Kilna</span></a> --
                            </li>
                            <li><a title="" href="#">11 Nov 2015</a> --</li>
                            <li>
                                <a title="" href="#"><span>275 Comments</span></a>
                            </li>
                        </ul>
                    </div>
                    <div style="text-align: justify">
                        <br />
                        <p>
                            LHOKSEUMAWE - Sinergi BUMN dukung pengembangan Kawasan Ekonomi
                            Khusus (KEK) Arun Lhokseumawe menjadi Kawasan Energi Hijau.
                            Kerjasama lintas BUMN ini diwujudkan melalui penandatangan Head
                            of Agreement Penyertaan Modal di PT Patriot selaku Badan Usaha
                            Pembangun dan Pengelola (BUPP) KEK Arun Lhokseumawe dimana PT
                            Pertamina (Persero) bersama BUMN lain yaitu PT Pupuk Iskandar
                            Muda, PT Pelindo, dan PT Pembangunan Aceh mengambil peran
                            strategis tersebut.
                        </p>
                        <p>
                            Disaksikan langsung oleh Presiden RI Joko Widodo dan Menteri
                            BUMN Erick Thohir, perjanjian tersebut ditandatangani oleh
                            Direktur Utama PT Pertamina (Persero) Nicke Widyawati, Ditektur
                            Utama PT Pupuk Iskandar Muda Budi Santoso Syarif, Direktur Utama
                            PT Pelindo Arif Suhartono, dan Direktur Utama PT Pembangunan
                            Aceh Ali Mulyagusdin. Penandatangan dilaksanakan hari ini (10/2)
                            di acara Peresmian Pabrik NPK Chemical Aceh Utara, Lhokseumawe
                            Provinsi Aceh.
                        </p>
                        <p>
                            KEK Arun Lhokseumawe dengan luas 2.600 Hektar akan fokus pada
                            sektor energi, petrokimia, agro industri pendukung ketahanan
                            pangan, logistik serta industri penghasil kertas kraft. Selain
                            itu wilayah ini juga memiliki potensi di pengembangan industri
                            perikanan dan industri pertanian dengan dukungan komoditas
                            unggulan seperti sawit, kopi, kakao, karet, kelapa, minyak
                            atsiri dan lain-lain.
                        </p>
                        <p>
                            KEK Arun Lhokseumawe dengan lokasinya yang sangat strategis
                            memiliki potensi besar untuk berkembang di pasar perdagangan
                            internasional khususnya ASEAN, sehingga membangun KEK Arun
                            Lhokseumawe menjadi kawasan industri hijau sangatlah penting.
                            Hal ini disampaikan oleh Presiden Republik Indonesia Joko Widodo
                            dalam sambutannya di acara peresmian.
                        </p>
                        <p>
                            “Kita harapkan kawasan KEK Arun Lhokseumawe ini nanti menjadi
                            kawasan industri hijau. Investor sudah akan mulai masuk kesini
                            dan kita harapkan ini akan berpengaruh pada PDRB provinsi aceh.
                            Perkiraan Kementerian BUMN bisa mempengaruhi 7% dari PDRB di
                            Aceh,” ungkap Jokowi.
                        </p>
                    </div>

                    <!-- form
                              ============================================ -->
                    <div class="form-area">
                        <h3 class="category-headding">LEAVE A COMMENT</h3>
                        <div class="headding-border"></div>
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="input-1" />
                                        <label class="input_label" for="input-1">
                                            <span class="input_label_content" data-content="Your Name">Your Name</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-sm-6">
                                    <span class="input">
                                        <input class="input_field" type="text" id="input-2" />
                                        <label class="input_label" for="input-2">
                                            <span class="input_label_content" data-content="Your Email">Your Email</span>
                                        </label>
                                    </span>
                                </div>
                                <div class="col-sm-12">
                                    <span class="input">
                                        <textarea class="input_field" id="message"></textarea>
                                        <label class="input_label" for="message">
                                            <span class="input_label_content" data-content="Your Email">Your Message</span>
                                        </label>
                                    </span>
                                    <button type="button" class="btn btn-style">
                                        Post Your Comment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- comment box
                              ============================================ -->
                    <div class="comments-container">
                        <h1>Comment</h1>
                        <ul id="comments-list" class="comments-list">
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <div class="comment-avatar">
                                        <img src="images/comment-01.jpg" class="img-circle" alt="" />
                                    </div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name by-author">
                                                <a href="#">Agustin Ortiz</a>
                                            </h6>
                                            <span>hace 20 minutos</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Velit omnis animi et iure laudantium vitae,
                                            praesentium optio, sapiente distinctio illo?
                                        </div>
                                    </div>
                                </div>
                                <!-- Respuestas de los comentarios -->
                                <ul class="comments-list reply-list">
                                    <li>
                                        <!-- Avatar -->
                                        <div class="comment-avatar">
                                            <img src="images/comment-02.jpg" class="img-circle" alt="" />
                                        </div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name">
                                                    <a href="#">Lorena Rojero</a>
                                                </h6>
                                                <span>hace 10 minutos</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Velit omnis animi et iure laudantium vitae,
                                                praesentium optio, sapiente distinctio illo?
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Avatar -->
                                        <div class="comment-avatar">
                                            <img src="images/comment-01.jpg" class="img-circle" alt="" />
                                        </div>
                                        <!-- Contenedor del Comentario -->
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author">
                                                    <a href="#">Agustin Ortiz</a>
                                                </h6>
                                                <span>hace 10 minutos</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Velit omnis animi et iure laudantium vitae,
                                                praesentium optio, sapiente distinctio illo?
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="comment-main-level">
                                    <!-- Avatar -->
                                    <div class="comment-avatar">
                                        <img src="images/comment-02.jpg" class="img-circle" alt="" />
                                    </div>
                                    <!-- Contenedor del Comentario -->
                                    <div class="comment-box">
                                        <div class="comment-head">
                                            <h6 class="comment-name">
                                                <a href="#">Lorena Rojero</a>
                                            </h6>
                                            <span>hace 10 minutos</span>
                                            <i class="fa fa-reply"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <div class="comment-content">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Velit omnis animi et iure laudantium vitae,
                                            praesentium optio, sapiente distinctio illo?
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-sm-4 left-padding">
                <aside class="sidebar">
                    <div class="input-group search-area">
                        <!-- search area -->
                        <input type="text" class="form-control" placeholder="Search articles here ..."
                            name="q" />
                        <div class="input-group-btn">
                            <button class="btn btn-search" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.search area -->
                    <div class="banner-add">
                        <!-- add -->
                        <span class="add-title">- Advertisement -</span>
                        <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block"
                                alt="" /></a>
                    </div>
                    <div class="tab-inner">
                        <ul class="tabs">
                            <li><a href="#">POPULAR</a></li>
                        </ul>
                        <hr />
                        <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                                <div class="box-item wow fadeIn" data-wow-duration="1s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="https://pertaarungas.pertamina.com/gambar/7fdeca8ba02980212ec63de025c07bc0.JPG"
                                                alt="" height="80" width="90" /></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                            <a href="#">SPORTS</a>
                                        </h6>
                                        <h3 class="td-module-title">
                                            <a href="#">It is a long established fact that a reader will</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment">
                                                <i class="pe-7s-comment"></i> 13
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="https://pertaarungas.pertamina.com/gambar/e9a3207468140278618215a173db053e.jpg"
                                                alt="" height="80" width="90" /></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-2">
                                            <a href="#">TECHNOLOGY </a>
                                        </h6>
                                        <h3 class="td-module-title">
                                            <a href="#">The generated Lorem Ipsum is therefore</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment">
                                                <i class="pe-7s-comment"></i> 13
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="https://pertaarungas.pertamina.com/gambar/ac4ccca8921d9e3e8a142a32ab6ecc8c.jpg"
                                                alt="" height="80" width="90" /></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-3">
                                            <a href="#">HEALTH</a>
                                        </h6>
                                        <h3 class="td-module-title">
                                            <a href="#">The standard chunk of Lorem Ipsum used since</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment">
                                                <i class="pe-7s-comment"></i> 13
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb"
                                                src="https://pertaarungas.pertamina.com/gambar/6f50253d2c9c817a06de93a82106957e.jpg"
                                                alt="" height="80" width="90" /></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-4">
                                            <a href="#">FASHION</a>
                                        </h6>
                                        <h3 class="td-module-title">
                                            <a href="#">Lorem Ipum therefore always free from</a>
                                        </h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> Oct 6, 2016
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment">
                                                <i class="pe-7s-comment"></i> 13
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab_content -->
                    </div>
                    <!-- / tab -->
                </aside>
            </div>
        </div>
    </div>
@endsection
