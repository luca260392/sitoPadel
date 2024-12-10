<x-layout>

    <x-slot name="titolo">
        Noi del Padel Blog
    </x-slot>

    <!-- Navbar -->
    {{-- x-navbar --}}


    <!-- Profile Section -->
    <section class="profileSection-chiSiamoDettagli">
        <div class="row g-0">
            <div class="col-md-6">
                <img
                    src="{{ asset($user['image']) }}"
                    alt="{{ $user['name'] }}"
                    class="profileImage-chiSiamoDettagli"
                    onerror="this.src='{{ asset('media/default-profile.jpg') }}'"
                >
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="detailsContainer-chiSiamoDettagli">
                    <span class="roleBadge-chiSiamoDettagli">{{ $user['role'] }}</span>
                    <h1 class="mb-4">{{ $user['name'] }} {{ $user['surname'] }}</h1>
                    <p class="descriptionText-chiSiamoDettagli mb-4">{{ $user['description'] }}</p>
                    <p class="descriptionText-chiSiamoDettagli">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias iste quisquam a officiis corrupti consectetur fugit, expedita saepe eaque voluptates, aliquam molestiae sint maiores tenetur cupiditate qui beatae? Error sunt quidem, iure ut labore nam rem, eius fugit laboriosam temporibus, atque nihil impedit! Minus quidem nostrum ducimus incidunt nobis aut architecto odio distinctio maiores laborum quasi ex deserunt repudiandae expedita odit earum, similique quo alias ut. Ea, reprehenderit voluptatem itaque vel vero, quisquam, quia sit eveniet inventore qui ab. Explicabo, voluptatum. Inventore quod recusandae consequatur possimus cumque ad eos vel id, facere consequuntur magnam? Quasi a sint eaque dicta inventore repudiandae cumque quia, eveniet minima corporis recusandae laborum consectetur cum ipsam non placeat qui deleniti libero necessitatibus rem reprehenderit? Reprehenderit exercitationem sint maxime veritatis fugit laborum, illo praesentium aliquid assumenda consectetur minus mollitia voluptas, voluptates itaque tempore perferendis accusamus est nobis vero, debitis repellendus iste eveniet! Sunt delectus, aut suscipit nesciunt numquam voluptatem possimus, ut dolorem saepe ex molestias blanditiis eligendi ad maiores in? Dolor quod dignissimos quia non eum rem a voluptas exercitationem consequuntur eveniet odio perferendis similique, odit aut! Qui illum beatae aperiam voluptatem corrupti provident rem totam nemo accusantium molestiae consequatur, incidunt deleniti, assumenda amet perferendis asperiores.
                    </p>
                    <div class="socialIcons-chiSiamoDettagli">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Back Button -->
                <a href="/chi-siamo" class="back-button">
                    <i class="fas fa-arrow-left me-2"></i>Torna al Team
                </a>
            </div>
        </div>
    </section>



    <!-- Footer -->
    {{-- x-footer --}}

</x-layout>