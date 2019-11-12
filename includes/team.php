<?php include('header.php'); ?>
<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Our Team</h1>
                <p class="text-white">
                    Who are in extremely love with eco friendly system.
                </p>
            </div>
        </div>							
        <div class="row">
        <?php
            // $harry = array(
            //     'ola'=>'Mr. Olaniyi Taiwo',
            //     'ade'=>'Adegboyega - Fayemi Kenny Adebayo',
            //     'garba'=>'Garba Oluwasolabomi Arogundade',
            //     'ade2'=>'Adegboyega - Fayemi Taiwo Ademola',
            //     'fadoju'=>'Fadoju Babatunde Aina',
            //     'wilson'=>'Wilson Wu',
            //     'barrister'=>'Barrister Taiwo Kupolati Eso',
            //     'olaniyi'=>'Olaniyi Agbeje'
            // );

            $harry = array(
                array(
                    'img'=>'CEO_taiwo',
                    'name'=>'Mr. Olaniyi Taiwo',
                    'title'=>'CEO',
                    'text'=>'Mr. Olaniyi Taiwo who is addicted to openness, honesty and diligence as real ingredients of true success that made him to have almost two decades of top corporate operational experience. He started his carrier with UAC of Nigeria in the account Department of A.J. Seward which was a full division later Unilever. '
                ),

                array(
                    'img'=>'kenny_director',
                    'name'=>'Adegboyega - Fayemi Kenny ',
                    'title'=>'Executive Director Operations',
                    'text'=>'Adegboyega- Fayemi Kenny Adedayo is a graduate of The National Open University of Nigeria where he obtained a degree in Criminology. He is a motivational speaker, a business man and multi-talented personality. He is happily married to Tolulope and blessed with four children.'
                ),

                array(
                    'img'=>'unknown',
                    'name'=>'Garba Oluwasolabomi Arogundade',
                    'title'=>'Executive Director Corporate',
                    'text'=>'Garba Oluwasolabomi Arogundade is a product of University of Ibadan in Psychology, Post graduate holder from University of Ado-Ekiti on Financial management and Imo State University master degree holder in Project management.'
                ),

                array(
                    'img'=>'taiwo_director',
                    'name'=>'Adegboyega - Fayemi Taiwo',
                    'title'=>'Executive Director Technical',
                    'text'=>'Adeboyega- Fayemi Taiwo Ademola is an operational manager in every organization he has joint establishment. He enjoyed team work and specialized in coordination. He has HND in business administration. He has been involved in pioneering close to six flourishing company in Nigeria.'
                ),

                array(
                    'img'=>'fadoju_finance',
                    'name'=>'Fadoju Babatunde Aina',
                    'title'=>'Executive Director Finance',
                    'text'=>'Fadoju Babatumde Aina is a Financial Advisory and Business Development Consultant. He obtained his B.Sc in University of Ado-Ekiti, Ekiti State. He has also obtained other professional degree such as MBA, ACIB and AMNIM. '
                ),

                array(
                    'img'=>'wilson_wu',
                    'name'=>'Wilson Wu',
                    'title'=>'Executive Director Strategy',
                    'text'=>'Wilson Wu is a Chinese nationality that a product of Chinese University. He is an administrator per excellence who is also currently managing one of the most active Free Trade Zones in Africa, A business man with Chinese skill for series of business transformation stories for over a decade successfully. '
                ),

                array(
                    'img'=>'unknown',
                    'name'=>'Barrister Taiwo Kupolati ESQ',
                    'title'=>'Secretary/Legal Adviser',
                    'text'=>'Barrister Taiwo Kupolati Esq is a prominent legal icon in Nigeria Legal system both academically and professionally. He is a rare breed in terms of integrity culture in carrying our every task and responsibility. He is a graduate of law and Nigeria Law School. '
                ),

                array(
                    'img'=>'unknown',
                    'name'=>'Olaniyi Agbeje',
                    'title'=>'Chartered Accountant/Auditor',
                    'text'=>'Olaniyi Agbeje is a Chartered Accountant with almost two decade experience in Financial Professional Services. He started his career as an Accounts Officer with Modecom Solution Limited – A telecoms dealer before moving to Temidayo Adebayo & Co, a firm of Chartered Accountants as Graduate Training where he ascend to the rank of an  Audit Manager. '
                ),
            );
            // echo "<pre>";
            // print_r($harry);
            // echo "<pre>";
            // exit;
             foreach($harry as $ok){
        
        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                    <img src="img/team/<?php echo $ok['img']; ?>.jpg" class="img-fluid pb-4"/>

                        <a href="#" class="title d-flex flex-row align-items-center">
                            <h4><?php echo $ok['name']; ?></h4>
                        </a>
                        <p class="forlabel"><?php echo $ok['title']; ?></p>
                        <p>
                            <?php echo $ok['text']; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>	
</section>
<!-- End feature Area -->