<section class="wptb-contact-form style2">
    <div class="wptb-item-layer both-version">
        <img src=" {{asset('frontend/assets/img/more/texture-2.png')}} " alt="">
        <img src=" {{asset('frontend/assets/img/more/texture-2-light.png')}} " alt="">
    </div>
    <div class="container">
        <div class="wptb-form--wrapper no-bg">
            <div class="row">
                <div class="col-lg-5">
                    <div class="wptb-heading-two pe-lg-5">
                        <div class="wptb-item--inner">
                            <h6 class="wptb-item--subtitle"> Contact Nous</h6>
                            <h1 class="wptb-item--title"><span>Pour Des Souvenirs Inoubliables.</span></h1>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form class="wptb-form" action="contact.php" method="post">
                        <div class="wptb-form--inner">        
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nom*" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 mb-4">
                                    <div class="form-group">
                                       <input type="tel"  class="form-control" name="tel" id="" placeholder="Votre numero de téléphone">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subjet">
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12 mb-4">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-12">
                                    <div class="wptb-item--button"> 
                                        <button class="btn" type="submit">
                                            <span class="btn-wrap">
                                                <span class="text-first">Envoyer</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>