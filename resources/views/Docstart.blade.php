
@section('content')
<head>
<style>
/* CSS For My Docstar  */
section {
    padding: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.main_class{
    display: flex !important;
    flex-wrap:wrap !important; /* Allows wrapping if needed */
    gap:10px !important; /* Space between items */
    justify-content: space-around !important; /* Spacing between items */
    align-items: flex-start !important; /* Aligns items at the top */
}
.doctor-card {
    background-color: #fff;
    width: 300px;
    margin: 15px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    text-align: center;
}
.doctor-card:hover {
    transform: translateY(-10px);
}

.doctor-card img {
    width:100%;
    height:320px;
    object-fit:cover;
    border-bottom: 3px solid #161179; /* Accent border */
}

.doctor-card h3 {
    padding: 10px;
    background-color:#161179; /* Medium green */
    color:white;
    margin-top: 0;
}
.doctor-card p {
    padding: 15px;
    background-color:#FBE4D6; /* Light green */
    color:#0C0950;
    font-size: 1.1em;
}
.doctor-card a {
    display: inline-block;
    padding: 10px 15px;
    background-color:#261FB3; /* Dark green */
    color:#FBE4D6;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 15px;
    transition: background-color 0.3s;
}
.doctor-card a:hover {
    background-color: #161179; /* Slightly darker shade */
}
</style>
</head>

    <div class="container mx-auto py-10">
    <h1 class="text-3xl font-semibold text-center text-gray-800 mb-10" style="padding-top:2rem;">Famous Indian Doctors</h1>

<section>
    @php
        $doctors = [
            [
                'name' => 'Dr. Padmavati Sivaramakrishna',
                'description' => "Dr. S.I. Padmavati, India's first female cardiologist, pioneered cardiology in India by establishing the first cardiac clinic and cath lab and founding the National Heart Institute.",
                'image' => 'images/Drpadmavati.jpg',
                'link' => 'https://en.wikipedia.org/wiki/S._I._Padmavati',
            ],
            [
                'name' => 'Dr. M.S. Swaminathan',
                'description'=> 'Dr. M.S. Swaminathan is a renowned agricultural scientist, often referred to as the father of the Green Revolution in India, which revolutionized farming in the country.',  
                'image' => 'images/DrSwaminaathan.jpeg',
                'link' => 'https://en.wikipedia.org/wiki/M._S._Swaminathan',
            ],
            [
                'name' => 'Dr. Vikram Patel',
                'description'=> 'Dr. Vikram Patel is a global leader in mental health research and a professor of global health. He is known for his work on improving mental healthcare in low-income countries.',
                'image' => 'images/DrVikramPatel.jpg',
                'link' => 'https://en.wikipedia.org/wiki/Vikram_Patel',
            ],
            [
                'name' => 'Dr. Nandini Mundkur',
                'description'=> "Nandini Mundkur is a highly regarded figure in child development. She is a fellow of the UK's Royal College and an alumna of the Ashoka Fellowship.",
                'image' => 'images/DrNandini.jpg',
                'link' => 'https://en.wikipedia.org/wiki/Nandini_Mundkur',
            ],
            [
                'name' => 'Dr. Naresh Trehan',
                'description'=> 'Trehan was the founder, director and chief cardiovascular surgeon of Escorts Heart Institute and Research Center (EHIRC), which opened on Okhla Road, Delhi in 1988.',
                'image' => 'images/drNareshtehan.jpg',
                'link' => 'https://en.wikipedia.org/wiki/Naresh_Trehan',
            ],
            [
                'name' => 'Dr. Devi Prasad Shetty',
                'description'=> 'Dr. Devi Prasad Shetty, a renowned Indian cardiac surgeon, is known for making quality healthcare accessible and affordable. He founded Narayana Health, a leading hospital chain in India.',
                'image' => 'images/Devi_Shetty.jpg',
                'link' => 'https://en.wikipedia.org/wiki/Devi_Shetty',
            ],
        ];
    @endphp

        <div class="main_class">
        <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> -->
         @foreach($doctors as $doctor)
        <div class="doctor-card">
            <img src="{{ $doctor['image'] }}" alt="{{ $doctor['name'] }}">
            <h3>{{ $doctor['name'] }}</h3>
            <p>{{ $doctor['description'] }}</p>
            <a href="{{ $doctor['link'] }}" target="_blank">Learn More</a>
        </div>
    @endforeach
        </div>
    <!-- </div> -->
    </div>
</section>
@endsection
