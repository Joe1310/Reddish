@extends('layouts.app')
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
@section('title', 'Edit Profile')

@section('content')
    <h1>Edit Profile</h1>

    <form action="{{ route('players.update', ['id' => $player->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        
        <input type="hidden" name="user_id" value="{{ $player->user_id }}">

        <!-- Alias -->
        <div class="mt-4" id="alias-form-group">
            <x-input-label for="alias" :value="__('Alias')" />
            <textarea type="form-control" class="form-control" id="alias" name="alias" cols="20" placeholder="{{ old('alias', $player->alias) }}"></textarea>
            <x-input-error :messages="$errors->get('alias')" class="mt-2" />
        </div>
    
        <!-- Position -->
        <div class="mt-4">
            <x-input-label for="position" :value="__('Position')" />

            <select id="position" class="block mt-1 w-full" name="position" required>
                <option value="1" {{ old('position', $player->position) == 1 ? 'selected' : '' }}>Position 1</option>
                <option value="2" {{ old('position', $player->position) == 2 ? 'selected' : '' }}>Position 2</option>
                <option value="3" {{ old('position', $player->position) == 3 ? 'selected' : '' }}>Position 3</option>
                <option value="4" {{ old('position', $player->position) == 4 ? 'selected' : '' }}>Position 4</option>
                <option value="5" {{ old('position', $player->position) == 5 ? 'selected' : '' }}>Position 5</option>
            </select>

            <x-input-error :messages="$errors->get('position')" class="mt-2" />
        </div>

        <!-- Country -->
        <div class="mt-4">
            <x-input-label for="country" :value="__('Country')" />
            <select id="country" class="block mt-1 w-full" name="country" required>
                <option value="Afghanistan" {{ old('country', $player->country) == 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
                <option value="Aland Islands" {{ old('country', $player->country) == 'Aland Islands' ? 'selected' : '' }}>Åland Islands</option>
                <option value="Albania" {{ old('country', $player->country) == 'Albania' ? 'selected' : '' }}>Albania</option>
                <option value="Algeria" {{ old('country', $player->country) == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                <option value="American Samoa" {{ old('country', $player->country) == 'American Samoa' ? 'selected' : '' }}>American Samoa</option>
                <option value="Andorra" {{ old('country', $player->country) == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                <option value="Angola" {{ old('country', $player->country) == 'Angola' ? 'selected' : '' }}>Angola</option>
                <option value="Anguilla" {{ old('country', $player->country) == 'Anguilla' ? 'selected' : '' }}>Anguilla</option>
                <option value="Antarctica" {{ old('country', $player->country) == 'Antarctica' ? 'selected' : '' }}>Antarctica</option>
                <option value="Antigua and Barbuda" {{ old('country', $player->country) == 'Antigua and Barbuda' ? 'selected' : '' }}>Antigua & Barbuda</option>
                <option value="Argentina" {{ old('country', $player->country) == 'Argentina' ? 'selected' : '' }}>Argentina</option>
                <option value="Armenia" {{ old('country', $player->country) == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                <option value="Aruba" {{ old('country', $player->country) == 'Aruba' ? 'selected' : '' }}>Aruba</option>
                <option value="Australia" {{ old('country', $player->country) == 'Australia' ? 'selected' : '' }}>Australia</option>
                <option value="Austria" {{ old('country', $player->country) == 'Austria' ? 'selected' : '' }}>Austria</option>
                <option value="Azerbaijan" {{ old('country', $player->country) == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
                <option value="Bahamas" {{ old('country', $player->country) == 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                <option value="Bahrain" {{ old('country', $player->country) == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                <option value="Bangladesh" {{ old('country', $player->country) == 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
                <option value="Barbados" {{ old('country', $player->country) == 'Barbados' ? 'selected' : '' }}>Barbados</option>
                <option value="Belarus" {{ old('country', $player->country) == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                <option value="Belgium" {{ old('country', $player->country) == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                <option value="Belize" {{ old('country', $player->country) == 'Belize' ? 'selected' : '' }}>Belize</option>
                <option value="Benin" {{ old('country', $player->country) == 'Benin' ? 'selected' : '' }}>Benin</option>
                <option value="Bermuda" {{ old('country', $player->country) == 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
                <option value="Bhutan" {{ old('country', $player->country) == 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                <option value="Bolivia" {{ old('country', $player->country) == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                <option value="Bonaire, Sint Eustatius and Saba" {{ old('country', $player->country) == 'Bonaire, Sint Eustatius and Saba' ? 'selected' : '' }}>Caribbean Netherlands</option>
                <option value="Bosnia and Herzegovina" {{ old('country', $player->country) == 'Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia & Herzegovina</option>
                <option value="Botswana" {{ old('country', $player->country) == 'Botswana' ? 'selected' : '' }}>Botswana</option>
                <option value="Bouvet Island" {{ old('country', $player->country) == 'Bouvet Island' ? 'selected' : '' }}>Bouvet Island</option>
                <option value="Brazil" {{ old('country', $player->country) == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                <option value="British Indian Ocean Territory" {{ old('country', $player->country) == 'British Indian Ocean Territory' ? 'selected' : '' }}>British Indian Ocean Territory</option>
                <option value="Brunei Darussalam" {{ old('country', $player->country) == 'Brunei Darussalam' ? 'selected' : '' }}>Brunei</option>
                <option value="Bulgaria" {{ old('country', $player->country) == 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
                <option value="Burkina Faso" {{ old('country', $player->country) == 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
                <option value="Burundi" {{ old('country', $player->country) == 'Burundi' ? 'selected' : '' }}>Burundi</option>
                <option value="Cambodia" {{ old('country', $player->country) == 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                <option value="Cameroon" {{ old('country', $player->country) == 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
                <option value="Canada" {{ old('country', $player->country) == 'Canada' ? 'selected' : '' }}>Canada</option>
                <option value="Cape Verde" {{ old('country', $player->country) == 'Cape Verde' ? 'selected' : '' }}>Cape Verde</option>
                <option value="Cayman Islands" {{ old('country', $player->country) == 'Cayman Islands' ? 'selected' : '' }}>Cayman Islands</option>
                <option value="Central African Republic" {{ old('country', $player->country) == 'Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
                <option value="Chad" {{ old('country', $player->country) == 'Chad' ? 'selected' : '' }}>Chad</option>
                <option value="Chile" {{ old('country', $player->country) == 'Chile' ? 'selected' : '' }}>Chile</option>
                <option value="China" {{ old('country', $player->country) == 'China' ? 'selected' : '' }}>China</option>
                <option value="Christmas Island" {{ old('country', $player->country) == 'Christmas Island' ? 'selected' : '' }}>Christmas Island</option>
                <option value="Cocos (Keeling) Islands" {{ old('country', $player->country) == 'Cocos (Keeling) Islands' ? 'selected' : '' }}>Cocos (Keeling) Islands</option>
                <option value="Colombia" {{ old('country', $player->country) == 'Colombia' ? 'selected' : '' }}>Colombia</option>
                <option value="Comoros" {{ old('country', $player->country) == 'Comoros' ? 'selected' : '' }}>Comoros</option>
                <option value="Congo" {{ old('country', $player->country) == 'Congo' ? 'selected' : '' }}>Congo - Brazzaville</option>
                <option value="Congo, Democratic Republic of the Congo" {{ old('country', $player->country) == 'Congo, Democratic Republic of the Congo' ? 'selected' : '' }}>Congo - Kinshasa</option>
                <option value="Cook Islands" {{ old('country', $player->country) == 'Cook Islands' ? 'selected' : '' }}>Cook Islands</option>
                <option value="Costa Rica" {{ old('country', $player->country) == 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
                <option value="Cote D'Ivoire" {{ old('country', $player->country) == "Cote D'Ivoire" ? 'selected' : '' }}>Côte d’Ivoire</option>
                <option value="Croatia" {{ old('country', $player->country) == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                <option value="Cuba" {{ old('country', $player->country) == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                <option value="Curacao" {{ old('country', $player->country) == 'Curacao' ? 'selected' : '' }}>Curaçao</option>
                <option value="Cyprus" {{ old('country', $player->country) == 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                <option value="Czech Republic" {{ old('country', $player->country) == 'Czech Republic' ? 'selected' : '' }}>Czechia</option>
                <option value="Denmark" {{ old('country', $player->country) == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                <option value="Djibouti" {{ old('country', $player->country) == 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
                <option value="Dominica" {{ old('country', $player->country) == 'Dominica' ? 'selected' : '' }}>Dominica</option>
                <option value="Dominican Republic" {{ old('country', $player->country) == 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
                <option value="Ecuador" {{ old('country', $player->country) == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                <option value="Egypt" {{ old('country', $player->country) == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                <option value="El Salvador" {{ old('country', $player->country) == 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
                <option value="Equatorial Guinea" {{ old('country', $player->country) == 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
                <option value="Eritrea" {{ old('country', $player->country) == 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                <option value="Estonia" {{ old('country', $player->country) == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                <option value="Ethiopia" {{ old('country', $player->country) == 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
                <option value="Falkland Islands (Malvinas)" {{ old('country', $player->country) == 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>Falkland Islands (Islas Malvinas)</option>
                <option value="Faroe Islands" {{ old('country', $player->country) == 'Faroe Islands' ? 'selected' : '' }}>Faroe Islands</option>
                <option value="Fiji" {{ old('country', $player->country) == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                <option value="Finland" {{ old('country', $player->country) == 'Finland' ? 'selected' : '' }}>Finland</option>
                <option value="France" {{ old('country', $player->country) == 'France' ? 'selected' : '' }}>France</option>
                <option value="French Guiana" {{ old('country', $player->country) == 'French Guiana' ? 'selected' : '' }}>French Guiana</option>
                <option value="French Polynesia" {{ old('country', $player->country) == 'French Polynesia' ? 'selected' : '' }}>French Polynesia</option>
                <option value="French Southern Territories" {{ old('country', $player->country) == 'French Southern Territories' ? 'selected' : '' }}>French Southern Territories</option>
                <option value="Gabon" {{ old('country', $player->country) == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                <option value="Gambia" {{ old('country', $player->country) == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                <option value="Georgia" {{ old('country', $player->country) == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                <option value="Germany" {{ old('country', $player->country) == 'Germany' ? 'selected' : '' }}>Germany</option>
                <option value="Ghana" {{ old('country', $player->country) == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                <option value="Gibraltar" {{ old('country', $player->country) == 'Gibraltar' ? 'selected' : '' }}>Gibraltar</option>
                <option value="Greece" {{ old('country', $player->country) == 'Greece' ? 'selected' : '' }}>Greece</option>
                <option value="Greenland" {{ old('country', $player->country) == 'Greenland' ? 'selected' : '' }}>Greenland</option>
                <option value="Grenada" {{ old('country', $player->country) == 'Grenada' ? 'selected' : '' }}>Grenada</option>
                <option value="Guadeloupe" {{ old('country', $player->country) == 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe</option>
                <option value="Guam" {{ old('country', $player->country) == 'Guam' ? 'selected' : '' }}>Guam</option>
                <option value="Guatemala" {{ old('country', $player->country) == 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
                <option value="Guernsey" {{ old('country', $player->country) == 'Guernsey' ? 'selected' : '' }}>Guernsey</option>
                <option value="Guinea" {{ old('country', $player->country) == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                <option value="Guinea-Bissau" {{ old('country', $player->country) == 'Guinea-Bissau' ? 'selected' : '' }}>Guinea-Bissau</option>
                <option value="Guyana" {{ old('country', $player->country) == 'Guyana' ? 'selected' : '' }}>Guyana</option>
                <option value="Haiti" {{ old('country', $player->country) == 'Haiti' ? 'selected' : '' }}>Haiti</option>
                <option value="Heard Island and Mcdonald Islands" {{ old('country', $player->country) == 'Heard Island and Mcdonald Islands' ? 'selected' : '' }}>Heard Island and McDonald Islands</option>
                <option value="Holy See (Vatican City State)" {{ old('country', $player->country) == 'Holy See (Vatican City State)' ? 'selected' : '' }}>Holy See (Vatican City State)</option>
                <option value="Honduras" {{ old('country', $player->country) == 'Honduras' ? 'selected' : '' }}>Honduras</option>
                <option value="Hong Kong" {{ old('country', $player->country) == 'Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
                <option value="Hungary" {{ old('country', $player->country) == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                <option value="Iceland" {{ old('country', $player->country) == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                <option value="India" {{ old('country', $player->country) == 'India' ? 'selected' : '' }}>India</option>
                <option value="Indonesia" {{ old('country', $player->country) == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                <option value="Iran, Islamic Republic of" {{ old('country', $player->country) == 'Iran, Islamic Republic of' ? 'selected' : '' }}>Iran</option>
                <option value="Iraq" {{ old('country', $player->country) == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                <option value="Ireland" {{ old('country', $player->country) == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                <option value="Isle of Man" {{ old('country', $player->country) == 'Isle of Man' ? 'selected' : '' }}>Isle of Man</option>
                <option value="Israel" {{ old('country', $player->country) == 'Israel' ? 'selected' : '' }}>Israel</option>
                <option value="Italy" {{ old('country', $player->country) == 'Italy' ? 'selected' : '' }}>Italy</option>
                <option value="Jamaica" {{ old('country', $player->country) == 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                <option value="Japan" {{ old('country', $player->country) == 'Japan' ? 'selected' : '' }}>Japan</option>
                <option value="Jersey" {{ old('country', $player->country) == 'Jersey' ? 'selected' : '' }}>Jersey</option>
                <option value="Jordan" {{ old('country', $player->country) == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                <option value="Kazakhstan" {{ old('country', $player->country) == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
                <option value="Kenya" {{ old('country', $player->country) == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                <option value="Kiribati" {{ old('country', $player->country) == 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
                <option value="Korea, Democratic People's Republic of" {{ old('country', $player->country) == "Korea, Democratic People's Republic of" ? 'selected' : '' }}>North Korea</option>
                <option value="Korea, Republic of" {{ old('country', $player->country) == 'Korea, Republic of' ? 'selected' : '' }}>South Korea</option>
                <option value="Kosovo" {{ old('country', $player->country) == 'Kosovo' ? 'selected' : '' }}>Kosovo</option>
                <option value="Kuwait" {{ old('country', $player->country) == 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                <option value="Kyrgyzstan" {{ old('country', $player->country) == 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic" {{ old('country', $player->country) == "Lao People's Democratic Republic" ? 'selected' : '' }}>Laos</option>
                <option value="Latvia" {{ old('country', $player->country) == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                <option value="Lebanon" {{ old('country', $player->country) == 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                <option value="Lesotho" {{ old('country', $player->country) == 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                <option value="Liberia" {{ old('country', $player->country) == 'Liberia' ? 'selected' : '' }}>Liberia</option>
                <option value="Libyan Arab Jamahiriya" {{ old('country', $player->country) == 'Libyan Arab Jamahiriya' ? 'selected' : '' }}>Libya</option>
                <option value="Liechtenstein" {{ old('country', $player->country) == 'Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
                <option value="Lithuania" {{ old('country', $player->country) == 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
                <option value="Luxembourg" {{ old('country', $player->country) == 'Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
                <option value="Macao" {{ old('country', $player->country) == 'Macao' ? 'selected' : '' }}>Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of" {{ old('country', $player->country) == 'Macedonia, The Former Yugoslav Republic of' ? 'selected' : '' }}>Macedonia</option>
                <option value="Madagascar" {{ old('country', $player->country) == 'Madagascar' ? 'selected' : '' }}>Madagascar</option>
                <option value="Malawi" {{ old('country', $player->country) == 'Malawi' ? 'selected' : '' }}>Malawi</option>
                <option value="Malaysia" {{ old('country', $player->country) == 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
                <option value="Maldives" {{ old('country', $player->country) == 'Maldives' ? 'selected' : '' }}>Maldives</option>
                <option value="Mali" {{ old('country', $player->country) == 'Mali' ? 'selected' : '' }}>Mali</option>
                <option value="Malta" {{ old('country', $player->country) == 'Malta' ? 'selected' : ''}}>Malta</option>
                <option value="Marshall Islands" {{ old('country', $player->country) == 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
                <option value="Martinique" {{ old('country', $player->country) == 'Martinique' ? 'selected' : '' }}>Martinique</option>
                <option value="Mauritania" {{ old('country', $player->country) == 'Mauritania' ? 'selected' : '' }}>Mauritania</option>
                <option value="Mauritius" {{ old('country', $player->country) == 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
                <option value="Mayotte" {{ old('country', $player->country) == 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
                <option value="Mexico" {{ old('country', $player->country) == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                <option value="Micronesia, Federated States of" {{ old('country', $player->country) == 'Micronesia, Federated States of' ? 'selected' : '' }}>Micronesia</option>
                <option value="Moldova, Republic of" {{ old('country', $player->country) == 'Moldova, Republic of' ? 'selected' : '' }}>Moldova</option>
                <option value="Monaco" {{ old('country', $player->country) == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                <option value="Mongolia" {{ old('country', $player->country) == 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
                <option value="Montenegro" {{ old('country', $player->country) == 'Montenegro' ? 'selected' : '' }}>Montenegro</option>
                <option value="Montserrat" {{ old('country', $player->country) == 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
                <option value="Morocco" {{ old('country', $player->country) == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                <option value="Mozambique" {{ old('country', $player->country) == 'Mozambique' ? 'selected' : '' }}>Mozambique</option>
                <option value="Myanmar" {{ old('country', $player->country) == 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
                <option value="Namibia" {{ old('country', $player->country) == 'Namibia' ? 'selected' : '' }}>Namibia</option>
                <option value="Nauru" {{ old('country', $player->country) == 'Nauru' ? 'selected' : '' }}>Nauru</option>
                <option value="Nepal" {{ old('country', $player->country) == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                <option value="Netherlands" {{ old('country', $player->country) == 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
                <option value="Netherlands Antilles" {{ old('country', $player->country) == 'Netherlands Antilles' ? 'selected' : '' }}>Netherlands Antilles</option>
                <option value="New Caledonia" {{ old('country', $player->country) == 'New Caledonia' ? 'selected' : '' }}>New Caledonia</option>
                <option value="New Zealand" {{ old('country', $player->country) == 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
                <option value="Nicaragua" {{ old('country', $player->country) == 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
                <option value="Niger" {{ old('country', $player->country) == 'Niger' ? 'selected' : '' }}>Niger</option>
                <option value="Nigeria" {{ old('country', $player->country) == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                <option value="Niue" {{ old('country', $player->country) == 'Niue' ? 'selected' : '' }}>Niue</option>
                <option value="Norfolk Island" {{ old('country', $player->country) == 'Norfolk Island' ? 'selected' : '' }}>Norfolk Island</option>
                <option value="Northern Mariana Islands" {{ old('country', $player->country) == 'Northern Mariana Islands' ? 'selected' : '' }}>Northern Mariana Islands</option>
                <option value="Norway" {{ old('country', $player->country) == 'Norway' ? 'selected' : '' }}>Norway</option>
                <option value="Oman" {{ old('country', $player->country) == 'Oman' ? 'selected' : '' }}>Oman</option>
                <option value="Pakistan" {{ old('country', $player->country) == 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
                <option value="Palau" {{ old('country', $player->country) == 'Palau' ? 'selected' : '' }}>Palau</option>
                <option value="Palestinian Territory, Occupied" {{ old('country', $player->country) == 'Palestinian Territory, Occupied' ? 'selected' : '' }}>Palestine</option>
                <option value="Panama" {{ old('country', $player->country) == 'Panama' ? 'selected' : '' }}>Panama</option>
                <option value="Papua New Guinea" {{ old('country', $player->country) == 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
                <option value="Paraguay" {{ old('country', $player->country) == 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
                <option value="Peru" {{ old('country', $player->country) == 'Peru' ? 'selected' : '' }}>Peru</option>
                <option value="Philippines" {{ old('country', $player->country) == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                <option value="Pitcairn" {{ old('country', $player->country) == 'Pitcairn' ? 'selected' : '' }}>Pitcairn</option>
                <option value="Poland" {{ old('country', $player->country) == 'Poland' ? 'selected' : '' }}>Poland</option>
                <option value="Portugal" {{ old('country', $player->country) == 'Portugal' ? 'selected' : '' }}>Portugal</option>
                <option value="Puerto Rico" {{ old('country', $player->country) == 'Puerto Rico' ? 'selected' : '' }}>Puerto Rico</option>
                <option value="Qatar" {{ old('country', $player->country) == 'Qatar' ? 'selected' : '' }}>Qatar</option>
                <option value="Reunion" {{ old('country', $player->country) == 'Reunion' ? 'selected' : '' }}>Reunion</option>
                <option value="Romania" {{ old('country', $player->country) == 'Romania' ? 'selected' : '' }}>Romania</option>
                <option value="Russian Federation" {{ old('country', $player->country) == 'Russian Federation' ? 'selected' : '' }}>Russia</option>
                <option value="Rwanda" {{ old('country', $player->country) == 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                <option value="Saint Barthelemy" {{ old('country', $player->country) == 'Saint Barthelemy' ? 'selected' : '' }}>Saint Barthélemy</option>
                <option value="Saint Helena" {{ old('country', $player->country) == 'Saint Helena' ? 'selected' : '' }}>Saint Helena</option>
                <option value="Saint Kitts and Nevis" {{ old('country', $player->country) == 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
                <option value="Saint Lucia" {{ old('country', $player->country) == 'Saint Lucia' ? 'selected' : '' }}>Saint Lucia</option>
                <option value="Saint Martin" {{ old('country', $player->country) == 'Saint Martin' ? 'selected' : '' }}>Saint Martin</option>
                <option value="Saint Pierre and Miquelon" {{ old('country', $player->country) == 'Saint Pierre and Miquelon' ? 'selected' : '' }}>Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and the Grenadines" {{ old('country', $player->country) == 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>Saint Vincent and the Grenadines</option>
                <option value="Samoa" {{ old('country', $player->country) == 'Samoa' ? 'selected' : '' }}>Samoa</option>
                <option value="San Marino" {{ old('country', $player->country) == 'San Marino' ? 'selected' : '' }}>San Marino</option>
                <option value="Sao Tome and Principe" {{ old('country', $player->country) == 'Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
                <option value="Saudi Arabia" {{ old('country', $player->country) == 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
                <option value="Senegal" {{ old('country', $player->country) == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                <option value="Serbia" {{ old('country', $player->country) == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                <option value="Serbia and Montenegro" {{ old('country', $player->country) == 'Serbia and Montenegro' ? 'selected' : '' }}>Serbia and Montenegro</option>
                <option value="Seychelles" {{ old('country', $player->country) == 'Seychelles' ? 'selected' : '' }}>Seychelles</option>
                <option value="Sierra Leone" {{ old('country', $player->country) == 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
                <option value="Singapore" {{ old('country', $player->country) == 'Singapore' ? 'selected' : '' }}>Singapore</option>
                <option value="Sint Maarten" {{ old('country', $player->country) == 'int Maarten' ? 'selected' : '' }}>Sint Maarten</option>
                <option value="Slovakia" {{ old('country', $player->country) == 'Slovakia' ? 'selected' : '' }}>Slovakia</option>
                <option value="Slovenia" {{ old('country', $player->country) == 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
                <option value="Solomon Islands" {{ old('country', $player->country) == 'Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
                <option value="Somalia" {{ old('country', $player->country) == 'Somalia' ? 'selected' : '' }}>Somalia</option>
                <option value="South Africa" {{ old('country', $player->country) == 'South Africa' ? 'selected' : '' }}>South Africa</option>
                <option value="South Georgia and the South Sandwich Islands" {{ old('country', $player->country) == 'South Georgia and the South Sandwich Islands' ? 'selected' : '' }}>South Georgia and the South Sandwich Islands</option>
                <option value="South Sudan" {{ old('country', $player->country) == 'South Sudan' ? 'selected' : '' }}>South Sudan</option>
                <option value="Spain" {{ old('country', $player->country) == 'Spain' ? 'selected' : '' }}>Spain</option>
                <option value="Sri Lanka" {{ old('country', $player->country) == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
                <option value="Sudan" {{ old('country', $player->country) == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                <option value="Suriname" {{ old('country', $player->country) == 'Suriname' ? 'selected' : '' }}>Suriname</option>
                <option value="Svalbard and Jan Mayen" {{ old('country', $player->country) == 'Svalbard and Jan Mayen' ? 'selected' : '' }}>Svalbard and Jan Mayen</option>
                <option value="Swaziland" {{ old('country', $player->country) == 'Swaziland' ? 'selected' : '' }}>Swaziland</option>
                <option value="Sweden" {{ old('country', $player->country) == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                <option value="Switzerland" {{ old('country', $player->country) == 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
                <option value="Syrian Arab Republic" {{ old('country', $player->country) == 'Syrian Arab Republic' ? 'selected' : '' }}>Syria</option>
                <option value="Taiwan, Province of China" {{ old('country', $player->country) == 'Taiwan, Province of China' ? 'selected' : '' }}>Taiwan</option>
                <option value="Tajikistan" {{ old('country', $player->country) == 'Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
                <option value="Tanzania, United Republic of" {{ old('country', $player->country) == 'Tanzania, United Republic of' ? 'selected' : '' }}>Tanzania</option>
                <option value="Thailand" {{ old('country', $player->country) == 'Thailand' ? 'selected' : '' }}>Thailand</option>
                <option value="Timor-Leste" {{ old('country', $player->country) == 'Timor-Leste' ? 'selected' : '' }}>Timor-Leste</option>
                <option value="Togo" {{ old('country', $player->country) == 'Togo' ? 'selected' : '' }}>Togo</option>
                <option value="Tokelau" {{ old('country', $player->country) == 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
                <option value="Tonga" {{ old('country', $player->country) == 'Tonga' ? 'selected' : '' }}>Tonga</option>
                <option value="Trinidad and Tobago" {{ old('country', $player->country) == 'Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
                <option value="Tunisia" {{ old('country', $player->country) == 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                <option value="Turkey" {{ old('country', $player->country) == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                <option value="Turkmenistan" {{ old('country', $player->country) == 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
                <option value="Turks and Caicos Islands" {{ old('country', $player->country) == 'Turks and Caicos Islands' ? 'selected' : '' }}>Turks and Caicos Islands</option>
                <option value="Tuvalu" {{ old('country', $player->country) == 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                <option value="Uganda" {{ old('country', $player->country) == 'Uganda' ? 'selected' : '' }}>Uganda</option>
                <option value="Ukraine" {{ old('country', $player->country) == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                <option value="United Arab Emirates" {{ old('country', $player->country) == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
                <option value="United Kingdom" {{ old('country', $player->country) == 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
                <option value="United States" {{ old('country', $player->country) == 'United States' ? 'selected' : '' }}>United States</option>
                <option value="United States Minor Outlying Islands" {{ old('country', $player->country) == 'United States Minor Outlying Islands' ? 'selected' : '' }}>United States Minor Outlying Islands</option>
                <option value="Uruguay" {{ old('country', $player->country)== 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                <option value="Uzbekistan" {{ old('country', $player->country) == 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
                <option value="Vanuatu" {{ old('country', $player->country) == 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                <option value="Venezuela" {{ old('country', $player->country) == 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
                <option value="Viet Nam" {{ old('country', $player->country) == 'Viet Nam' ? 'selected' : '' }}>Vietnam</option>
                <option value="Virgin Islands, British" {{ old('country', $player->country) == 'Virgin Islands, British' ? 'selected' : '' }}>Virgin Islands, British</option>
                <option value="Virgin Islands, U.S." {{ old('country', $player->country) == 'Virgin Islands, U.S.' ? 'selected' : '' }}>Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna" {{ old('country', $player->country) == 'Wallis and Futuna' ? 'selected' : '' }}>Wallis and Futuna</option>
                <option value="Western Sahara" {{ old('country', $player->country) == 'Western Sahara' ? 'selected' : '' }}>Western Sahara</option>
                <option value="Yemen" {{ old('country', $player->country) == 'Yemen' ? 'selected' : '' }}>Yemen</option>
                <option value="Zambia" {{ old('country', $player->country) == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                <option value="Zimbabwe" {{ old('country', $player->country) == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
            </select>
                
        <!-- Profile Picture -->
        <div class="mt-4">
            <x-input-label for="profile_picture" :value="__('Profile Picture')" />
            <input id="profile_picture" type="file" class="block mt-1 w-full" name="profile_picture">
            <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />
        </div>

        <!-- Rank -->
        <div class="mt-4">
            <x-input-label for="rank" :value="__('Rank')" />

            <select id="rank" class="block mt-1 w-full" name="rank">
                @foreach(['immortal', 'divine', 'ancient', 'legend', 'archon', 'crusader', 'guardian', 'herald', 'uncalibrated'] as $rank)
                    <option value="{{ $rank }}" {{ old('rank', $player->rank) === $rank ? 'selected' : '' }}>{{ ucfirst($rank) }}</option>
                @endforeach
            </select>

            <x-input-error :messages="$errors->get('rank')" class="mt-2" />
        </div>

        <!-- Update Button -->
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection