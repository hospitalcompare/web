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
            'Can I change hospitals if I’ve been waiting more than 18 weeks for treatment?',
            'Will I be charged for using Hospital Compare?',
            'Will the NHS really pay for me to have my NHS treatment at a private hospital?',
            'If I have my NHS treatment at a private rather than NHS hospital, is the cost to the taxpayer the same?',
            'Does using Hospital Compare cost the NHS money?',
            'What personal data do you collect?',
            'Where are you storing my personal information?',
            'Are you using any of my information for marketing purposes?',
            'How often do you update your data?',
            'Can I compare information on several hospitals?',
            'Can I enquire about the same treatment at multiple hospitals?',
            'If I already have a referral for NHS treatment with a particular NHS or private hospital, can I change to have my treatment at a different hospital, still paid for by the NHS?',
            'What happens to information I enter on an enquiry form?',
            'What types of enquiry can I make?',
            'When will I receive a response to my enquiries?',
            'If I have private healthcare insurance, can I choose to have my treatment at any hospital you list?',
            'Are you sponsored by a private hospital group?',
            'Is the information you provide impartial?',
            'Are you making recommendations?',
            'Are you giving insurance or financial advice?',
            'Are you giving medical recommendations for my treatment?',
            'Have you investigated any of these hospitals to verify waiting times, quality etc?',
            'How can I trust that the information you are giving is true?',
            'Has your site or service been approved or verified by the NHS or Care Quality Commission (CQC)?',
            'Is you site regulated?',
            'Can I choose a consultant?',
            'How do I find a consultant of my choice?',
            'I have seen a consultant at an NHS hospital, can I change to a consultant at a private or other hospital?',
            'I have seen a consultant at an NHS hospital; can I make an appointment for a second opinion through your site? Will the NHS pay for that?',
            'Where do I find information about consultants on your site?',
            'How can I contact you or provide feedback about my experience of Hospital Compare?',
            'How can I provide feedback about a hospital or other service provider on your site?',
            'Do you cover all hospitals in England, Wales, Scotland and Northern Ireland?',
            'Do the hospitals listed carry out cosmetic surgery?',
            'What does the term ‘elective treatment’ mean?',
            'What is the NHS User rating?',
            'What is the Care Quality rating?',
            'What is the Friend and Family rating?',
            'How are hospital waiting times calculated?',
            'Why is a Particular Hospital Included (or Not Included) in the Search Results?',
            'Why Are There Records That State ‘No Data’?'
        ];

        //All answers related to the given question that will be populated
        $answers = [
            '<p>
                        Yes.<br>
                        Patients have a right to start consultant-led treatment within 18 weeks of referral
                        or request an offer of alternative providers that can start their treatment sooner.
                        The NHS must take all reasonable steps to meet patients’ requests.
                    </p>',
            '<p>
                         No, this service is completely free to the patient.
                    </p>',
                    '<p>
                        Yes.<br>
                        If you are referred by a GP for NHS treatment, the NHS will pay for your
                        treatment at an NHS or private hospital of your choice, as the Health and
                        Social Care Act 2013 gives you the legal right to choose.<br>
                        There are some exceptions*, but most private hospitals across the UK
                        have a contract with the NHS to perform treatments on their behalf.<br>
                        *(click <a href="/privacy-policy" class="btn-link">here</a> for exception)
                    </p>',
            '<p>
                        Yes.
                    </p>',
            '<p>
                        No.
                    </p>',
            '<p>
                        We take our data protection obligations seriously and it is important to us
                        that you understand how we use your personal data. </p>
                        <p>When you make an enquiry with a hospital, we need to record some personal
                        details in order to pass your enquiry to your chosen hospital.</p>
                        <p>If you would like more information, please read our Privacy Policy,
                        Cookie Policy and Terms and Conditions; they set-out how we process some of
                        your personal data and for what purpose, who we share it with, how long we keep it and what rights you have in relation to our processing.
                    </p>',
            '<p>
                        Please read our Privacy Policy for full details.
                    </p>',
            '<p>
                        No, we are not using your personal data for marketing purposes.
                    </p>',
            '<p>
                        We seek to ensure our data is as up-to-date and accurate as possible.</p>
                        <p>Most data sources are updated monthly, however some hospitals do not publicly
                        report their data, or on occasions are unable to submit data for a period.
                        Where this is the case, it is displayed on Hospital Compare as ‘no data’.
                    </p>',
            '<p>
                        Yes. You can compare and enquire with a number of hospitals at once.</p>
                        <p>Click the ‘Compare’ button to the right of your search results.
                        All selected hospitals will be added to your shortlist, which can then be
                        viewed by clicking the ‘Comparison’ button in the bottom right of the page.
                        The shortlist panel will appear, allowing you to review your selections and
                        choose the right hospital for you.
                    </p>',
            '<p>
                        Yes. You can make as many enquiries as you like by clicking the ‘Make an Enquiry’
                        button to the right of each hospital in your search results.</p>
                        <p>It may be easier to shortlist a number of hospitals using our compare function.
                        Click the ‘Add to Compare’ button to the right of each hospital. All shortlisted
                        hospitals will be added to your shortlist which can be viewed by clicking the ‘Compare’
                        button at the bottom right of the page. From the shortlist panel you can review and
                        compare all hospitals shortlisted , and choose which hospitals to enquire with.
                    </p>',
            '<p>
                        Generally if you are already receiving care and treatment from the NHS, you do not have
                        the right to choose to move to another healthcare provider, whether a private hospital paid
                        for by the NHS or another NHS Hospital. However, if you have not been seen by a specialist
                        within 18 weeks (or two weeks in the case of urgent suspected cancer), the NHS must take
                        reasonable steps to offer alternatives. Speak to your GP or the hospital you were first
                        referred to, they will give you more information on your rights. You can use Hospital Compare
                        to help you find a suitable alternative hospital to receive your NHS treatment faster, whether
                        this is at an NHS hospital or a private hospital paid for by the NHS.  </p>
                        <p>Alternatively, you can move to a private hospital for your treatment if you choose to pay for
                        the treatment yourself, or it is covered by your healthcare insurance. You can use Hospital Compare to search for alternatives.
                    </p>',
            '<p>
                        When you complete an enquiry form, it’s sent to the hospital(s) of your choice.
                        We keep a copy of each as a record, in accordance with our <a
                            href="/terms-of-use" class="btn-link">Terms of Use</a>. We will
                        also email you to confirm when we have delivered your enquiry. Once received, your
                        enquiry will be treated in accordance with each individual hospital’s terms, conditions and privacy policy.
                    </p>',
            '<p>
                        When you complete the Make an Enquiry form the details are sent to the hospital(s)
                        of your choice – you could be asking the hospital for more information, requesting details
                        on treatments or consultants, finding out about expected waiting times. Your enquiry is
                        obligation free and doesn’t commit you to anything.
                    </p>',
            '<p>
                        Generally, we would expect a hospital to typically respond to you
                        directly within three or four working days.</p>
                        <p>If the NHS hospital of your choice doesn’t currently accept our enquiries, we will
                        direct you to their website where you will find their contact details. You can also book an
                        appointment at an NHS hospital or Private hospital via your GP through the NHS
                        E-Referral Service. Speak to your GP to find out how to do this.
                    </p>',
            '<p>
                        The terms of your insurance policy will determine which hospital and
                        consultants are available to you.</p>
                        <p>Hospital Compare’s search results allow you to filter by insurers and their
                        unique policies, so you can determine which hospitals are authorised under your cover.</p>
                        <p>If you cannot find your policy listed on our site or if you have specific questions, we
                        recommend you speak to your insurer or make an enquiry to the hospital of your choice.
                    </p>',
            '<p>
                        No.</p>
                        <p>Hospital Compare is an independent company that provides fair and impartial information
                        to help you make an informed hospital choice. We have no shareholders from private hospital groups.
                    </p>',
            '<p>
                        Yes. Providing impartial information is one of our key principles.</p>
                        <p>Regardless of whether they display an NHS or private hospital, your search
                        results on Hospital Compare always appear in the same fair and impartial way.
                    </p>',
            '<p>
                        No, Hospital Compare does not make recommendations of any nature.</p>
                        <p>The information found within your search results is
                        provided for information purposes only.</p>
                        <p>It is the user’s responsibility to interpret their individual results on Hospital Compare and
                        consult with the healthcare service providers they feel best suit their requirements.</p>
                        <p>Please note we are not qualified or authorised to give medical or financial services advice or recommendations and would never seek to do so.
                    </p>',
            '<p>
                        No, Hospital Compare does not provide any form of insurance or financial advice.</p>
                        <p>We are not qualified or authorised to provide this type of advice.
                    </p>',
            '<p>
                        No, Hospital Compare does not make medical recommendations.</p>
                        <p>The information found within your search results is
                        provided for information purposes only.</p>
                        <p>It is the user’s responsibility to interpret their individual results on Hospital Compare and consult
                        with the healthcare service providers they feel best suit their requirements.</p>
                        <p>Please note we are not qualified or authorised to provide medical recommendations and do not seek to do so.
                    </p>',
            '<p>
                        The information presented on this website is publicly-available and published by individual hospitals
                        and bodies such as the Care Quality Commission. Our team draw together that information and present
                        it on Hospital Compare in an easily-accessible and understandable fashion.</p>
                        <p>As the information is published by hospitals and other third parties, we are not responsible for
                        incorrect or incomplete information and can’t be held liable for their mistakes.
                    </p>',
            '<p>
                        Hospital Compare has been created by a team with significant collective
                        experience in the healthcare sector.</p>
                        <p>The information presented on this website is publicly-available and
                        published by individual hospitals, as well as bodies such as the Care Quality
                        Commission. Our team draw together that information and present it in an easily-
                        accessible and understandable fashion.</p>
                        <p>When a user searches on Hospital Compare, all results from both NHS and
                        private hospitals are presented in a consistent, fair and impartial way. It is
                        that user’s responsibility to interpret their search results and consult with
                        the service providers they feel best suit their requirements.
                    </p>',
            '<p>
                        No, as there is no requirement to do so. The information presented on Hospital Compare is
                        from publicly-available sources and published by national oversight bodies, such as the Care
                        Quality Commission. Our team draw together that information and present it in an
                        easily-accessible and understandable fashion.
                    </p>',
            '<p>
                        No, it doesn’t need to be. This is because Hospital Compare doesn’t provide medical
                        advice or recommendations, nor financial or insurance advice.</p>
                        <p>We aren’t qualified or authorised to provide advice or recommendations of this nature
                        and would never seek to do so. The content within an individual user’s search results
                        on this website is provided for information purposes only.</p>
                        <p>It is an individual user’s responsibility to interpret their results and consult
                        with the service providers they feel best suit their requirements.
                    </p>',
            '<p>
                        If you choose to pay for the treatment yourself, or payment is being made by
                        your health insurance, you can typically choose to see a specific consultant.</p>
                        <p>If you choose to have your treatment performed at an NHS hospital or private hospital
                        (paid for by the NHS), you can generally choose the clinical team who will oversee your
                        care (which will be led by a consultant), rather than being able to choose the particular consultant.</p>
                        <p>When you make an enquiry to a hospital, you can request more information about the
                        consultants who perform the treatment you require at their hospital and their availability.
                    </p>',
            '<p>
                        When you make an enquiry to a hospital, they will give you more information about
                        the consultants who perform the treatment you require at their site(s) and their
                        availability. Guidance on consultants at NHS hospitals may be available via their website,
                        or your GP can guide you. Hospital Compare will include consultant information in the near future.
                    </p>',
            '<p>
                        This depends on the circumstances. Generally, unless you decide to pay for the
                        treatment yourself or it is being provided under the terms of your healthcare
                        insurance policy, you do not have legal rights to change your consultant provided
                        and paid for by the NHS once you are receiving treatment. However, if your treatment
                        has not started within 18 weeks (or two weeks in the case of urgent suspected cancer),
                        the NHS must take reasonable steps to offer alternatives. Speak to your GP or the
                        hospital you were first referred to, they will give you more information on your
                        rights. You can use Hospital Compare to help you find a suitable alternative
                        hospital to receive your NHS treatment faster, whether this is at an NHS hospital
                        or a private hospital paid for by the NHS.</p>
                        <p>Alternatively, you can move to a private hospital for your treatment if you choose to pay for the
                        treatment yourself, or it is covered by your healthcare insurance. You can use Hospital Compare to search for alternatives.</p>
                        <p>You can also find out more <a target="_blank" href="https://www.gov.uk/government/publications/the-nhs-choice-framework/the-nhs-choice-framework-what-choices-are-available-to-me-in-the-nhs" class="btn-link">here</a>
                    </p>',
            '<p>
                        Generally no, unless you are paying for that second opinion privately or it is
                        covered by the terms of your health insurance policy. For more information on
                        this issue you should speak to your GP or health insurance provider.
                    </p>',
            '<p>
                        This information is currently not available on Hospital Compare,
                        but will be added in the near future. </p>
                        <p>If you make an enquiry to a private hospital through our site, that hospital will
                        be glad to provide you with information on their consultants. NHS hospitals do not
                        have the systems and resources to do this but your GP can guide you in relation to
                        the available consultants and teams at NHS hospitals, or this information may be
                        published on their website.
                    </p>',
            '<p>
                        Please email us by clicking <a class="btn-link" href="mailto:hello@hospitalcompare.co.uk">here</a>.
                    </p >',
            '<p>
                        We don’t represent any of the healthcare providers you find on our
                        site; if you have feedback for them we recommend you contact them directly.</p>
                        <p>If you find any information on the website that you feel is incorrect, please contact
                        <a class="btn-link" href="mailto:datamanager@hospitalcompare.co.uk">datamanager@hospitalcompare.co.uk</a>
                        with the details of the hospital record that need to be reviewed.
                    </p>',
            '<p>
                        Currently we cover hospitals in England only. We plan to roll out to <b>Wales, Scotland and Northern Ireland</b> in the future.
                    </p>',
            '<p>
                        By selecting the treatment you’re interested in as well as your preferred
                        location with our search tool, your results will showcase relevant hospitals.</p>
                        <p>Please note purely cosmetic treatments are not generally available on the NHS;
                        we suggest you discuss your circumstances with your GP and they will advise you.</p>
                        <p>Availability for cosmetic treatment at a private hospital (paid for by you or by your
                        healthcare insurance) may vary from provider to provider. We recommend you make an enquiry of
                        your chosen hospital for more information, as well as your insurers to identify any exceptions
                        that apply to you.
                    </p>',
            '<p>
                        The term ‘elective treatment’ means an operation, procedure or treatment which you have
                        chosen (“elected”) to have done, whether via the NHS or a private healthcare provider.
                    </p>',
            '<p>
                        Patients can leave a rating on <a class="btn-link" target="_blank" href="https://www.nhs.uk">www.nhs.uk</a> regarding their care at that hospital.
                        That website then collates these into a five-star score. We use that score wherever
                        we are able to find and apply it to the locations listed on Hospital Compare.
                    </p >',
            '<p>
                        The Care Quality Commission is the independent regulator of all healthcare
                        services in England, they monitor, inspect and regulate services to make sure they
                        meet fundamental standards of quality and safety and then they publish what they
                        find, including performance ratings. Hospital Compare uses the published
                        performance ratings to help you make informed decisions when choosing a
                        preferred location for your care.
                    </p >',
            '<p>
                        All NHS providers collect information from patients in a variety of ways. The
                        friends and family collection asks patients whether they would recommend the
                        location they were treated in to these groups if they required a similar treatment.
                        There are five possible responses, Hospital Compare use the ‘very likely’ and ‘likely’
                        responses combined as a percentage of all responses.
                    </p>',
            '<p>
                        Hospital waiting times are calculated by each hospital for all specialties,
                        before being collated and published monthly. This reflects the number of weeks that
                        the 92<sup>nd</sup> person out of 100 people (the 92<sup>nd</sup> Percentile) has been waiting for their
                        treatment to start. This statistic is currently being reviewed because Healthwatch
                        England have shown that few people understand it – the proposal is likely to be that
                        all hospitals move to reporting the average (mean) number of weeks.</p>
                        <p>Hospital Compare also utilise the Treated waiting time statistics for Outpatients and
                        Inpatients, these show the number of weeks that the 95<sup>th</sup> person out of 100 waited for their
                        treatment to start. The data are available separately for the 18 highest volume specialties,
                        with the remaining data for low volume specialties are grouped into ‘other’. If no treatment
                        selection is made on the Hospital Compare website, we display the ‘total’ value for the location.
                        <p>We strive to maintain the accuracy of information we hold regarding all Hospital Compare location, but if
                        you feel that a location has been incorrectly excluded or included, or if any other
                        detail is incorrect, please contact us and let us know.
                    </p>',
            '<p>
                        NHS hospitals are operated by Trusts and more often than not, a Trust operates across
                        multiple hospital locations. If it’s clear that a hospital location only provides non-consultant
                        led services that you wouldn’t be routinely referred to by your GP (unless you were seriously ill or
                        urgently needed access), then we will exclude that hospital from our results.</p>
                        <p>This means there are likely some hospital locations missing from our list. Equally, if we can’t
                        definitively see why the location would be excluded then we will include it. For example, often a
                        community hospital will host outpatient services… it may not always be clear. If there is any doubt,
                        we will keep the location on the list.
                    </p>',
            '<p>
                        We combined multiple data sources to create our overall result; unfortunately, not all of
                        the locations listed feature in each of the data sources we use. Our aim is to give you a balanced
                        view on where best to have your healthcare treatment by combining these data sources in a way that
                        no one else can, but we appreciate that this sometimes leads to situations where elements of data
                        are missing for a location.</p>
                        <p>Equally, if you find multiple locations have the same values, it’s likely that they belong to the same Trust and the data are
                        not specific to the location. We aim to ensure as much data as possible are specific to each location but it depends
                        on how the data are published. If the data are only available at Trust level, that is how we report it.

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
