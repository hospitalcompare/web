<?php

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SearchFaqs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create the FAQ_Categories table
        if (!Schema::hasTable('faq_categories')) {
            Schema::create('faq_categories', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('status')->default("active");
                $table->timestamps();
            });
        }

        //Create the FAQs table
        if (!Schema::hasTable('faqs')) {
            Schema::create('faqs', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('faq_category_id')->nullable();
                $table->longText('question');
                $table->longText('answer');
                $table->string('status')->default("active");
                $table->timestamps();

                $table->foreign('faq_category_id')->references('id')->on('faq_categories')->onDelete('cascade')->onUpdate('cascade');
            });
        }

        //Populate with data
        //Faq Categories //TODO: Change these with the real ones
        for($i = 1; $i < 5; $i++) {
            $category[$i] = new FaqCategory();
            $category[$i]->name = 'Category '.$i;
            $category[$i]->save();
        }

        //All questions that will be populated
        $questions = [
            'Can I choose to have my procedure performed at a private hospital and the NHS will pay?',
            'Do I have a legal right to have my procedure at a private hospital and for the NHS to pay for it?',
            'How do I compare information on several hospitals?',
            'Can I make enquiries of more than one hospital for the same procedure?',
            'Will the NHS pay for a special offer listed on your site?',
            'How do I find a consultant of my choice?',
            'Can I choose a consultant?',
            'Do the hospitals listed carry out cosmetic surgery?',
            'If I have booked an appointment with an NHS hospital already can I change to have my procedure at a private hospital paid for by the NHS?',
            'I have seen a consultant at an NHS hospital, can I change to a consultant at a private hospital?',
            'I have seen a consultant at an NHS hospital can I make an appointment for a second opinion through your site? Will the NHS pay for that?',
            'I only need an outpatient appointment can I book that through your website?',
            'Can I book an appointment with a named consultant through your website?',
            'Where do I find information about consultants on your site?',
            'Can I compare consultants on your site?',
            'I have private healthcare insurance, can I choose to have my procedure at any of the hospitals you feature?',
            'How can I find out if my insurance policy covers the hospitals, procedures or consultants mentioned on your site?',
            'Am I going to be charged for using your comparison site?',
            'Do you cover all hospitals in England? Wales? Scotland ? Northern Ireland?',
            'Do you cover all hospitals in the UK?',
            'Are you a charity? How do you make money?',
            'Are there any hidden charges for using your site?',
            'Are you sponsored by a private hospital group?',
            'Is the information you provide impartial?',
            'What are the strengths and weaknesses of this site?',
            'Are you making recommendations?',
            'Are you giving insurance or financial advice?',
            'Are you giving medical recommendations for my procedure?',
            'Are you financially incentivised or sponsored by private hospitals?',
            'Have you investigated any of these hospitals to verify waiting times and quality and so on?',
            'How can I trust that the information you are giving is true?',
            'Has your site or service been approved by the NHS or CQC?',
            'What happens to my information entered on an enquiry form?',
            'Why can’t I make an enquiry of an NHS hospital but I can for a private hospital?',
            'Is your information biased towards private hospitals?',
            'Who verifies the information on your site ? How can I trust it?',
            'How can I complain about you or thank you or give feedback?',
            'How can I complain about a Hospital or other service provider on your site?',
            'When will I receive a reply to my enquiries?',
            'If I make an enquiry are you going to use my information to send me marketing information?',
            'What happens to my data if I make an enquiry?',
            'What happens to my data if I compare hospitals on your site?',
            'Where are you storing my personal information?',
            'Are you using any of my information for marketing to me?',
            'How often do you update your data?',
            'Is you site regulated?',
        ];

        //All answers related to the given question that will be populated
        $answers = [
            '<p>
                        Yes you can. This is your legal right under the Health and Social Care Act 2013
                        and
                        this right is enshrined in the NHS constitution. In fact the NHS contract every
                        year
                        with private hospitals to provide resources to meet the demand for health
                        services. The NHS pay for these services not you.
                    </p>',
            '<p>
                        Yes you can. This is your legal right under theHealth and Social Care Act 2013
                        and
                        this right is enshrined in the NHS constitution. To take up your rights you will
                        need a
                        referral from your GP. GPs are obliged to choose the best options for your care
                        and to
                        involve you in that choice. Regardless of whether your procedure is best
                        performed at an
                        NHS Hospital or a private Hospital paid for by the NHS.
                    </p>
                    <p>
                        In fact the NHS contract every year with private hospitals to provide resources
                        to meet the
                        demand for health services. The NHS pay for these services not you.
                    </p>',
            '<p>
                        When you have performed a search for hospitals on your results page you can
                        click the
                        blue “compare” icon
                        <a id="1" class="btn btn-green-outline compare btn-block mt-0" target="" href="javascript:void(0);" role="button"> <i class=""></i></a>
                    </p>
                    <p>
                        You can do this for up to 4 hospitals. You will then see at the bottom of the
                        page on the
                        right a link which once clicked will compare the hospitals you have chosen to
                        compare.

                    </p>',
            '<p>
                        Yes you can. You can do so on our site by clicking the “Make and Enquiry“
                        button on the right hand side of your screen opposite the hospital concerned
                        once you have performed a search.
                    </p>',
            '<p>
                        The NHS work in partnership with private hospitals and the private healthcare
                        sector
                        to perform thousands of procedures a year, paid for by the NHS. The terms upon
                        which
                        these procedures are performed are settled between the NHS and the private
                        sector.
                        The sum paid by the NHS to private hospitals for these procedures is known as
                        the “NHS Tariff”.
                        If you would like your procedure performed at a private hospital paid for by the
                        NHS
                        it’s best to make an enquiry of the hospital concerned, rather than clicking on
                        a “special
                        offer button” You will need to have your GP refer you to the hospital and they
                        will
                        explain what you need to do next. So you should discuss this with your GP.
                    </p>
                    <p>
                        You can do so on our site by clicking the “Make and Enquiry “ button on the
                        right
                        hand side of your screen opposite the hospital concerned once you have performed
                        a search. You can make several enquiries of different hospitals at the same
                        time,
                        if you wish.
                    </p>
                    <p>
                        Generally, the Special Offers may relate to procedures which are paid for by the
                        patient or possibly by the Insurer, but not usually by the NHS.
                    </p>',
            '<p>
                        You can find a list of consultants who work at a hospital appearing in your
                        search
                        results for your procedure by clicking on the “consultants” button under the
                        name
                        of the hospital on the left hand side of your screen on your search results
                        page.
                        When you make an enquiry of the hospital concerned they will give you more
                        information
                        about the consultants who perform the procedure you require at their hospital
                        and
                        their availability.
                    </p>
                    <p>
                        You can make this enquiry by clicking the “Make an Enquiry “ button on the right
                        hand
                        side of your screen opposite the hospital concerned once you have performed a
                        search.
                    </p>
                    <p>
                        [Note this functionality is not yet enable on the site]
                    </p>',
            '<p>
                        You can choose a team to perform your procedure led by a consultant of your
                        choosing at an NHS hospital. This is your legal right. There are exceptions.
                    </p>
                    <p>
                        If you choose to have your procedure performed at an NHS Hospital or Private
                        Hospital, paid for by the NHS, you can generally choose the Hospital and the
                        clinical team who will be in charge of your treatment. Which will be lead
                        by a consultant. If you choose to pay for the procedure yourself or payment
                        is being made by your health insurance, you can choose to see a specific
                        consultant.
                    </p>
                    <p>
                        Exceptions sometimes apply and different waiting times might apply also,
                        depending
                        upon how the procedure is paid for.
                    </p>
                    <p>
                        You can find a list of consultants who work at a hospital appearing in your
                        search
                        results for your procedure by clicking on the “Consultants” button under the
                        name of the
                        hospital on the left hand side of your screen on your search results page.
                        [This information is not always available for NHS hospitals]. When you make an
                        enquiry of the hospital concerned they will give you more information about
                        the consultants who perform the procedure you require at their hospital
                        and their availability.
                    </p>
                    <p>
                        You can make this enquiry by clicking the “Make and Enquiry “ button on the
                        right
                        hand side of your screen opposite the hospital concerned once you have performed
                        a search.
                        You can make several enquiries of different hospitals at the same time, if you
                        wish.
                        NHS hospitals, generally do not permit you to make an enquiry in this way, but
                        we will
                        refer you to their website if this is the case where you will see all
                        information about how to contact the NHS hospital concerned. You can also
                        discuss
                        how to contact your NHS Hospital with your GP.
                    </p>',
            '<p>
                        You can search for a hospital of your choice to perform your required
                        procedure by clicking the “Surgery Type “ button at the top left hand side of
                        your search results page and choosing a procedure, if known, from the drop down
                        list or by choosing a more generic description of the issue to be investigated.
                        If you want more information you can make an enquiry of the hospital concerned
                        by
                        clicking the “Make an Enquiry “ button on the right hand side of your screen
                        opposite the hospital concerned once you have performed a search. NHS hospitals,
                        unfortunately do not currently permit you to make an enquiry in this way, but we
                        refer you in your hospital search results to their website where you will see
                        all
                        information about how to contact the NHS hospital concerned. You can also
                        discuss
                        how to contact them with your GP.
                    </p>
                    <p>
                        Note that purely cosmetic procedures are not generally available on the NHS.
                        Suggest you discuss your circumstances with your GP and they will advise you.
                        Availability for a cosmetic procedure at a private hospital paid for by you or
                        by your healthcare insurance may vary from hospital to hospital and your
                        insurance
                        may have exceptions that apply. You can clarify this with your insurers or make
                        an enquiry at the hospital or hospitals concerned by clicking the enquiry button
                        on your search results, as mentioned above.
                    </p>',
            '<p>
                        This depends on the circumstances. Generally, unless you are paying for the
                        treatment
                        yourself or it is being provided under the terms of your healthcare insurance
                        policy,
                        you do not have legal rights to choose again under the NHS Constitution, if you
                        are
                        already receiving care and treatment from the NHS already for the condition for
                        which
                        you are being referred or if you need urgent or emergency treatment. If you
                        require
                        further information you can speak to your GP. You can also find out more
                        <a href="https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nh"
                           class="btn-link" target="_blank">here</a>
                    </p>',
            '<p>
                        This depends on the circumstances. Generally, unless you decide to pay for the
                        treatment yourself or it is being provided under the terms of your healthcare
                        insurance policy, you do not have legal rights to change your consultant
                        provided
                        and paid for by the NHS. This is a matter of law enshrined in the NHS
                        Constitution,
                        if you are already receiving care and treatment from the NHS for the condition
                        for
                        which you are being referred or if you need urgent or emergency treatment. If
                        you
                        require further information you can speak to your doctor. You can also find out
                        more
                        <a href="https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nh"
                           class="btn-link" target="_blank">here</a>
                    </p>',
            '<p>
                        Generally no, unless you are paying for that second opinion
                        privately or it is covered by the terms of your health insurance policy.
                        For more information on this issue you should speak to your GP or your health
                        insurance provider.
                    </p>',
            '<p>
                        Yes you can. Just perform a search for hospitals in the usual way, then click
                        the
                        “Make an Enquiry” button on the right hand side of your screen for the relevant
                        hospital.
                        The hospital will contact you and you can discuss the details with them.
                        Exceptions may apply.
                    </p>',
            '<p>
                        You can choose a team to perform your procedure led by a consultant of your
                        choosing at an
                        NHS hospital. This is your legal right. There are exceptions.
                    </p>
                    <p>
                        If you choose to have your procedure performed at a private hospital, either
                        paid for
                        by yourself [or by the NHS] - <b>[to be checked]</b> or by your health
                        insurance, you can generally
                        choose the actual consultant to perform your procedure. Exceptions may apply and
                        different
                        waiting times might apply also, depending upon how the procedure is paid for.
                    </p>
                    <p>
                        You can find a list of consultants who work at a hospital appearing in your
                        search results for your
                        procedure by clicking on the “Consultants” button under the name of the hospital
                        on the left hand
                        side of your screen on your search results page. This information is not always
                        available for NHS
                        hospitals. To find the right consultant you will have to first apply the filter
                        to search by
                        procedure and find a suitable hospital then look for the “Consultants” button
                        under the name of
                        the hospital. When you make an enquiry of the hospital concerned they will give
                        you more
                        information about the consultants or their team who perform the procedure you
                        require at their
                        hospital and their availability.
                    </p>
                    <p>
                        You can make this enquiry by clicking the “Make an Enquiry “ button on the right
                        hand
                        side of your screen opposite the hospital concerned once you have performed a
                        search. You can make
                        several enquiries of different hospitals at the same time, if you wish. NHS
                        hospitals, unfortunately
                        do not currently permit you to make an enquiry in this way, but we refer you in
                        your hospital search results
                        to their website where you will see all information about how to contact the NHS
                        hospital concerned.
                        You can also discuss how to contact them with your GP.
                    </p>',
            '<p>
                        You can find a list of consultants who work at each hospital appearing in your
                        search results
                        for your procedure by clicking on the “Consultants” button under the name of the
                        hospital on
                        the left hand side of your screen on your search results page. This information
                        is not always
                        available for NHS hospitals.To find the right consultant To find the right
                        consultant you will have
                        to first apply the filter to search by procedure and find a suitable hospital
                        then look for the
                        “Consultants” button under the name of the hospital. When you make an enquiry of
                        the hospital concerned
                        they will give you more information about the consultants or their team who
                        perform the procedure
                        you require at their hospital and their availability.
                    </p>',
            '<p>
                        No this facility is not currently available. Our primary purpose is to compare
                        hospitals.
                        However, you can find a list of consultants who work at a hospital appearing in
                        your search results
                        for your procedure by clicking on the “Consultants” button under the name of the
                        hospital on the left
                        hand side of your screen on your search results page. This information is not
                        always available for NHS
                        hospitals.To find the right consultant you will have to first apply the filter
                        to search by procedure and
                        find a suitable hospital then look for the “Consultants” button under the name
                        of the hospital. When
                        you make an enquiry of the hospital concerned they will give you more
                        information about the
                        consultants or their team who perform the procedure you require at their
                        hospital and their availability.
                    </p>',
            '<p>
                        The terms of your insurance policy determine which hospital and which
                        consultants are authorised to
                        treat you if the procedure is to be paid for by your insurer. If you are unsure
                        you should speak to
                        your insurer to verify if the hospital or consultant of your choice is approved
                        under your policy.
                        Also try clicking the filter button on the top right hand side of the search
                        results page called
                        “Private healthcare policies”. There you should be able to find the name of your
                        health insurer and
                        the name of the policy you have with them. By clicking that filter your search
                        will be filtered by
                        reference to the hospitals authorised by that policy. If you are unsure either
                        ask your insurer or make
                        an enquiry of your hospital of choice and they will help you.
                    </p>',
            '<p>
                        Try clicking the filter button on the top right hand side of your search results
                        page called “Private healthcare policies”.
                        There you should be able to find the name of your health insurer and the name of
                        the policy you have with them.
                        By clicking that filter your search will be filtered by reference to the
                        hospitals authorised by that policy.
                    </p>
                    <p>
                        If you are unsure either ask your insurer or make an enquiry of your hospital of
                        choice and they will help you.
                    </p>',
            '<p>
                        Our services are and will always be free to consumers.
                    </p>',
            '<p>
                        No, at this point in time we only cover hospitals in England.
                    </p>',
            '<p>
                        No, at this point in time we only cover hospitals in England.
                    </p>',
            '<p>
                        We are not a charity we are a business and for that reason we have costs to
                        cover and seek to make money for providing a valued service. So if you make an
                        enquiry
                        from a private hospital or service provider we connect you with, we may receive
                        a fee.
                        We also may receive a fee if you choose a procedure at a private hospital
                        whether you
                        pay the hospital yourself or your insurer pays for you or the NHS pays for you.
                        But we <b>never</b> receive any fees from the NHS.
                    </p>
                    <p>
                        Nevertheless, we always show hospital choice information in a fair and impartial
                        way.
                        For example, waiting times for private hospitals and NHS hospitals are always
                        presented in
                        the same format, in the same way so you can compare true waiting times from each
                        as disclosed by
                        them publicly on a like for like basis.
                    </p>',
            '<p>
                        Our services are and will always be free to consumers. But we are not a charity,
                        we
                        are a business and for that reason we have costs to cover and seek to make money
                        for providing a valued service.
                        So if you make an enquiry to a private hospital or service provider we connect
                        you with, we may receive a fee.
                        We also may receive a fee if you choose a procedure at a private hospital
                        whether you pay the
                        hospital yourself or your insurer pays for you or the NHS pays for you. But we
                        <b>never</b> receive any fees from the NHS.
                    </p>
                    <p>
                        Nevertheless, we always show hospital choice information in a fair and impartial
                        way.
                        For example, waiting times for private hospitals and NHS hospitals are always
                        presented in
                        the same format, in the same way so you can compare true waiting times from each
                        as disclosed by
                        them publicly on a like for like basis.
                    </p>',
            '<p>
                        No we are not. We are an independent company and receive no sponsorship from
                        private hospital
                        groups and no private hospital group is a shareholder in our company.One of our
                        principles
                        is that we always strive to provide fair and impartial advice on hospital
                        choice.
                    </p>',
            '<p>
                        One of our key principles is to provide impartial advice at all times on
                        hospital availability
                        and choice based on the search criteria we provide for you. We are not a
                        charity, however, we are a
                        business and for that reason we have costs to cover and seek to make money for
                        providing a valued service.
                        So if you make an enquiry from a hospital or service provider we connect you
                        with, we may receive a fee.
                        We also may receive a fee If you choose a procedure at a private hospital
                        whether you pay the hospital
                        yourself or your insurer pays for you or the NHS pays for you. But we
                        <b>never</b> receive any fees from the NHS.
                    </p>
                    <p>
                        Nevertheless, we always show hospital choice information in a fair and impartial
                        way.
                        For example, waiting times for private hospitals and NHS hospitals are always
                        presented in
                        the same format, in the same way so you can compare true waiting times from each
                        as disclosed by
                        them publicly on a like for like basis.
                    </p>',
            '<p>
                        It’s important to understand that we give you the very best impartial advice on
                        hospital choice,
                        quickly and in a form that’s easy to digest. We compile the information we
                        present to you from
                        information which is publicly available but which may be difficult to find, hard
                        to understand,
                        manipulate and compare like with like. So we source the information and spend a
                        lot of time and
                        expertise in creating complex data sets on hospitals. Our experts then check and
                        cleanse the
                        data and consolidate and present it in easy to understand formats, so you can
                        compare hospitals
                        on a like for like basis; so you can form quick and clear comparisons of the
                        choices available
                        to you. But we can’t guarantee to be right every time. Sometimes the information
                        may be wrong
                        and sometimes hospitals don’t give out the right data or any data, even though
                        our experts do
                        their best to provide you with the right data. So it’s up to you to build on the
                        information
                        we give you and verify with your chosen doctors or other chosen advisers if the
                        hospitals you
                        choose and the procedures or solutions you proceed with are right for you in
                        your circumstances.
                        So the information we give you is used at your own risk. We can’t accept
                        responsibility if
                        your procedure goes wrong or if the products or services you choose are not
                        right for you.
                    </p>',
            '<p>
                        No we do not give any form of recommendations of any nature. This will be a
                        matter for the
                        service provider to whom we connect you, whether it be a hospital, a medical
                        practitioner or
                        an insurance broker, or other financial adviser. We are not qualified or
                        authorised to give
                        medical or financial services advice or recommendations and would never seek to
                        do so.
                        We only give you the very best publicly available information on hospital
                        choices,
                        impartially, and occasionally give you information about other services where
                        you can seek
                        specialist advice. So we might connect you with an insurance broker, for
                        example. It is up
                        to you to do your own research, in addition, to ensure you are getting the right
                        service
                        from the right brokers and practitioners for your particular circumstances.
                        Remember we give
                        you impartial information on hospital choice and occasionally we will connect
                        you with other
                        specialists on other matters but we never give advice on medical or financial
                        matters.
                    </p>',
            '<p>
                        No we do not give any form of financial services or insurance advice. This will
                        be a matter for
                        the service provider to whom we connect you, whether it be an insurance broker,
                        or other financial adviser.
                        We are not qualified or authorised to give financial services advice and would
                        never seek to do so.
                        We only give you the very best publicly available information on hospital
                        choices, impartially, and
                        occasionally give you information about other services where you can seek
                        specialist advice.So we might
                        connect you with an insurance broker, for example. It is up to you to do your
                        own research in addition to
                        ensure you are getting the right service from the right brokers and
                        practitioners for your particular
                        circumstances. Remember we give you impartial information on choice not
                        financial advice or
                        financial services advice.
                    </p>',
            '<p>
                        No we do not give medical advice or recommendations. This will be a matter for
                        the service provider
                        to whom we connect you, whether it be a private hospital or medical
                        practitioner. We are not qualified or
                        authorised to give medical advice or recommendations and would never seek to do
                        so. We strive to give you
                        the very best hospital choice information available to us, synergised from a
                        number of sources and validated
                        by our research and data experts. It is up to you to do your own research in
                        addition and to make your
                        choice to ensure you are getting the right service from the right hospital and
                        practitioners for your
                        particular circumstances. Remember we give you impartial information on choice
                        not medical advice or recommendations.
                    </p>',
            '<p>
                        One of our key objectives is to provide impartial advice at all times on
                        hospital availability
                        and choice based on the search criteria we provide for you. We are not a
                        charity, however, we are a
                        business and for that reason we have costs to cover and seek to make money for
                        providing a valued service.
                        So if you make an enquiry from a private hospital or service provider we connect
                        you with, we may receive a
                        fee. We also may receive a fee If you choose a procedure at a private hospital
                        whether you pay the hospital
                        yourself or your insurer pays for you or the NHS pays for you. But we
                        <b>never</b> receive any fees from the NHS.
                    </p>
                    <p>
                        Nevertheless, we always show hospital choice information in a fair and impartial
                        way.
                        For example, waiting times for private hospitals and NHS hospitals are always
                        presented in
                        the same format, in the same way so you can compare true waiting times from each
                        as disclosed by
                        them publicly on a like for like basis.
                    </p>',
            '<p>
                        We compile the waiting times and other information on hospitals we present on
                        our site
                        from information which is published by the hospital concerned and the CQC and
                        validated and
                        synergised with other information validated by our research and data experts. If
                        a hospital has
                        given wrong or incomplete information that is not our responsibility and we
                        can\'t be held liable
                        for their mistakes. We do our best, however, to ensure you get the very best
                        available impartial
                        information on hospital choice in a clear and understandable way so that you can
                        compare hospitals
                        against other hospitals in a like for like manner.
                    </p >',
            '<p>
                        We do our best to ensure you get the very best available, impartial information
                        on hospital choice in
                        a clear and understandable way so that you can compare hospitals against other
                        hospitals in a like for
                        like manner. Two of our sources for information are from the hospitals
                        themselves and the CQC.
                        <br>
                        We always strive to show hospital choice information in a fair and impartial
                        way. For example, waiting
                        times for private hospitals and NHS hospitals are always presented in the same
                        format, in the same way
                        so you can compare true waiting times from each as disclosed by them publicly on
                        a like for like basis.
                    </p>
                    <p>
                        However, it is up to you to do your own research in addition and to make your
                        choice to ensure you are getting
                        the right service from the right hospital and practitioners for your particular
                        circumstances. Remember we give
                        you impartial information on choice not medical advice or recommendations.
                    </p>',
            '<p>
                        No, it does not need to be. We compile the information we present to you from
                        information which is publicly available,
                        including from the NHS and CQC, but which may be difficult to find, hard to
                        understand, manipulate and compare like with like.
                        So we source the information and spend a lot of time and expertise in creating
                        and validating complex data sets on hospitals.
                        Our experts then check and cleanse the data and consolidate and present it in
                        easy to understand formats, so you can compare
                        hospitals on a like for like basis; so you can form quick and clear comparisons
                        of the choices available to you.
                    </p>',
            '<p>
                        Once you have completed an enquiry form this will be sent to the hospital or
                        hospitals of your choice.
                        We keep a copy of the enquiry on our servers as a record. Your privacy is
                        important to us and we keep
                        that information private in accordance with our privacy policy which you can
                        read
                        <a href="/privacy-policy" class="btn-link">here</a>.
                        Once the enquiry is with the hospital it will be treated in accordance with
                        their terms and conditions
                        and privacy policy which you can access from their website.
                    </p>',
            '<p>
                        It’s simply that NHS hospitals do not have the facility or resources available
                        to answer your enquiry in this way.
                        The only way of making an enquiry of them is to ask them yourself. However, you
                        can book an appointment at a
                        National Health hospital through the NHS “E- Referral” booking system which you
                        can ask your GP about and they will guide you.
                    </p>',
            '<p>
                        No, we are always impartial, fair and unbiased displaying only factual
                        information and data. We have no bias
                        towards or against the NHS, private hospitals in general or any particular
                        hospital or hospital group.
                        That is one of our core principles. We compile the waiting times and other
                        information on hospitals we present
                        on our site from information which is published by the hospital concerned and
                        from other sources including the CQC.
                        If they have given wrong or incomplete information that is not our
                        responsibility and we can\'t be held liable for
                        their mistakes. We do our best, however, to ensure you get the very best
                        available impartial information on hospital
                        choice in a clear and understandable way so that you can compare hospitals
                        against other hospitals in a like for like manner .
                    </p >',
            '<p>
                        We compile the waiting times and other information on hospitals we present on
                        our site from factual information which
                        is published by the hospital concerned, and we carry out a series of accuracy
                        and validation checks. If a hospital or
                        the CQC has given wrong or incomplete information that is not our responsibility
                        and we can\'t be held liable for their mistakes. We do our best, however, to ensure you get the very best available
                        impartial information on hospital choice in
                        a clear and understandable way so that you can compare hospitals against other
                        hospitals in a like for like manner .
                    </p >',
            '<p>
                        You can contact to make a complaint and to give us feedback good or bad by
                        emailing to
                        <a class="btn-link" href="mailto:customerservice@hospitalcompare.co.uk">customerservice@hospitalcompare.co.uk</a>.
                        All feedback is welcome and we always try to address
                        all issues which you raise. All feedback is good, thank you, and will be used to
                        improve our services.
                        And if we have done something well, it’s good to hear.Thank you !
                    </p>',
            '<p>
                        We do not represent any of the hospitals or practitioners you find on our site.
                        If you have a complaint about a hospital or
                        practitioner we suggest you contact them directly. Details of how to complain
                        can be found on their websites. You may also
                        choose to speak to your GP. If you feel you need professional legal advice, you
                        should consult a solicitor. You may wish to
                        make contact with a solicitor through our site.To do this you will find contact
                        details at the bottom of our home page, if you
                        scroll down, under the heading “ If things go wrong”
                    </p>',
            '<p>
                        This depends on the hospital to whom you have sent your enquiry. This is not
                        within our control and will generally be determined by
                        the hospital’s service standards. Most hospitals will tell you when you can
                        expect to receive a response on their website and in the
                        terms and conditions of their website. But you should expect to receive contact
                        within a few days.
                    </p>',
            '<p>
                        No we are not. Your privacy is important to us and we would only send you
                        marketing information if you expressly
                        consented to receiving it. Also you could stop receiving it at anytime by
                        withdrawing your consent.You can do this by contacting us at
                        <a class="btn-link" href="mailto:datamanager@hospitalcompare.co.uk">datamanager@hospitalcompare.co.uk</a>
                        or by clicking the request to
                        unsubscribe from marketing information which will be found on all marketing
                        messages we might send you.
                    </p>',
            '<p>
                        Once you have completed an enquiry form this will be sent to the hospital or
                        hospitals of your choice. We keep a copy of
                        the enquiry on our servers as a record. Your privacy is important to us and we
                        will keep that information private in accordance
                        with our privacy policy which you can read here [ insert a link to our privacy
                        policy]. Once the enquiry is with the hospital it
                        will be treated in accordance with their terms and conditions and privacy policy
                        which you can access from their website.
                    </p>',
            '<p>
                        Your privacy is important to us. Unless you tell us who you are by making an
                        enquiry of a hospital. We don’t know who you are.
                        We may know your device identity as you search our site and we may have your IP
                        address. These are insufficient, however, to identify you as a
                        person. We will use anonymous data like this to understand how people are using
                        our site and for the purpose of improving our site to create a better
                        user experience. You can find out more from our “Privacy Policy “ which you can
                        find <a href="/privacy-policy" class="btn-link">here</a>
                        and from our Terms and Conditions which you can find <a
                            href="/terms-and-conditions" class="btn-link">here</a>.
                    </p>',
            '<p>
                        Your privacy is important to us. You can find out how we respect and protect
                        your privacy by reading our “Privacy Policy” which can be found
                        <a href="/privacy-policy" class="btn-link">here</a>.
                    </p>',
            '<p>
                        No we are not. Your privacy is important to us and we would only send you
                        marketing information if you expressly
                        consented to receiving it. Also you could stop receiving it at anytime by
                        withdrawing your consent.You can do this by
                        contacting us at <a class="btn-link" href="mailto:datamanager@hospitalcompare.co.uk">datamanager@hospitalcompare.co.uk</a>
                        or by clicking the request to terminate receiving marketing information which
                        will be found on all marketing messages we might send you.
                    </p>',
            '<p>
                        We monitor the site continually and update our information as soon as new
                        information is available to us and our experts are able to
                        cleanse and compile the comparison information into a form that can be easily
                        compared and used by our users on a like for like basis.
                        <br>
                        As a guide a hospital will generally update its information which we use for
                        this site on a monthly basis. There are exceptions.
                        Sometimes the information is available sooner sometimes later. Sometimes a
                        hospital will not update its information and sometimes they will supply no data.
                    </p>',
            '<p>
                        No, it does not need to be. This is because we do not give medical advice or
                        recommendations and we do not give
                        financial advice either. This will be a matter for the service provider to whom
                        we connect you, whether it be a private hospital or
                        medical practitioner or insurance broker or financial services specialist or
                        solicitor. We are not qualified or authorised to give medical
                        advice or recommendations or financial advice or legal advice and would never
                        seek to do so.
                    </p>
                    <p>
                        We only give you the very best publicly available information on hospital
                        choices, and occasionally give you information about
                        other possible services where you can seek specialist advice. It is up to you to
                        do your own research in addition and to make your
                        choice to ensure you are getting the right service from the right hospital and
                        practitioners and experts for your particular circumstances.
                        Remember we give you impartial information on choice not medical advice or
                        financial advice.
                    </p>'
        ];

        //Faqs
        for($i = 0; $i < count($answers); $i++) {
            $faq[$i] = new Faq();
            $faq[$i]->faq_category_id   = 1;
            $faq[$i]->question          = $questions[$i];
            $faq[$i]->answer            = $answers[$i];
            $faq[$i]->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop faqs
        Schema::dropIfExists('faqs');
        //Drop faq_categories
        Schema::dropIfExists('faq_categories');
    }
}
