<div class="{{$selectClassName}}">


    <label class="selectBox" for="{{$selectId}}">{{$labelInner}}</label>
        <select  id="{{$selectId}}">
                <option class="firstOption">{{$slot}}</option>
                <option name="secondOption" id="secondOption"  value="">{{$selectboxOption1}}</option>
                <option name="thirdOption" id="thirdOption" value="">{{$selectboxOption2}}</option>

        </select>



    <i class="fas fa-chevron-down {{$chevronFAClassName}}"></i>


</div>