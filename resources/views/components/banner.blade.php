<div class="bannerParent">
    <section class="banner">

        <div class="bannerData">
            <div class="homePostCodeParent">
                <div class="homePostCodeBox">
                    <p>Find the best hospital for your
                        elective surgery</p>

                    @component('components.basic.selectbox')

                        Choose your procedure:

                        @slot('selectboxOption1')
                            surgery
                        @endslot
                        @slot('selectboxOption2')
                            Orthopedics
                        @endslot
                    @endcomponent
                    @component('components.basic.textbox')
                        @slot('textbox')
                            Enter your postcode
                        @endslot
                    @endcomponent
                    @component('components.basic.selectbox')
                        Up to 50 miles
                        @slot('selectboxOption1')
                            Up to 20 miles
                        @endslot
                        @slot('selectboxOption2')
                            Less than 20 miles
                        @endslot
                    @endcomponent

                    @component('components.basic.button', ['classTitle' => 'greenOval'])
                        @slot('button')
                            Find hospitals
                        @endslot
                    @endcomponent
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