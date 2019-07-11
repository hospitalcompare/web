<div class="bannerParent">
    <section class="banner">

        <div class="bannerData">
            <div class="homePostCodeParent">
                <div class="homePostCodeBox">
                    <p>Find the best hospital for your
                        elective surgery</p>
                    @include('components.basic.selectbox', ['options' => [['id'=>1, 'name'=>'Choose your procedure'], ['id'=>2, 'name'=>'Choose your procedure']], 'selectClassName'=> 'firstSelect', 'placeholder' => '', 'chevronFAClassName' => 'fa-chevron-down bannerChevron1'])



                    @include('components.basic.textbox', ['options' => 'Enter your postcode'])

                    @include('components.basic.selectbox', ['options' => [['id'=>' lessWideSelect', 'name'=>'Up to 50 miles'], ['id'=>2, 'name'=>'Up to 20 miles'], ['id'=>1, 'name'=>'Less than 20 miles']], 'selectClassName'=> 'secondSelect', 'placeholder' => 'How far would you like to travel?:', 'chevronFAClassName' => 'fa-chevron-down bannerChevron2'])
                    <p>
                        @include('components.basic.button', ['classTitle' => 'greenOval', 'button' => 'Find hospitals'])
                    </p>

                    <p class='browseButton'><a  href="">Browse all hospitals</a></p>
                </div>
            </div>
            <div class="homePromo">
                <p>The quality of care in England varies greatly
                    between hospitals. You have the legal right to choose
                    where to have your elective surgery*. It can be at:</p>
                <ul class="promoList">
                    <li><i class="fas fa-check"></i> An NHS hospital of your choice</li>
                    <li><i class="fas fa-check"></i> A private hospital funded by NHS</li>
                    <li><i class="fas fa-check"></i> A private hospital paid by you or
                        your insurance provider</li>
                </ul>
            </div>
        </div>
    </section>
</div>