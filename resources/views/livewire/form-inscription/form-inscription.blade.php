<div>
@if (session()->has('message'))
    <section class="">
            <div class="px-4 sm:px-10 md:px-12 lg:px-10 max-w-2xl mx-auto w-full">
                <!-- component -->
                <div class="h-[calc(100dvh-4rem)] flex items-center justify-center">
                    <div class="bg-white rounded-3xl p-6 sm:p-10 lg:p-12 border border-gray-200 ">
                        <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                            <path fill="currentColor"
                                d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                            </path>
                        </svg>
                        @if(session('message')==true)
                            <div class="text-center space-y-5">
                                <h4 class="text-2xl sm:text-4xl font-bold text-gray-900 text-center">Inscription reussi</h4>
                                <div class="space-y-2 text-gray-600">
                                    <p class=""> {{ session('message') }} </p>
                            
                                </div>
                                <br>
                                <div class=" text-center">
                                    <a href="{{route('form.index')}}" class="px-4 py-2.5 rounded-lg outline-none bg-blue-600 text-white transition hover:bg-blue-700 focus:bg-blue-500">
                                        Retour
                                    </a>
                                </div>
                            </div>
                        @endif

                        @if(session('message')==false)
                            <div class="text-center space-y-5">
                                <h4 class="text-2xl sm:text-4xl font-bold text-gray-900 text-center">Inscription reussi</h4>
                                <div class="space-y-2 text-gray-600">
                                    <p class=""> Merci ! pour la réservation </p>
                            
                                </div>
                                <br>
                                <div class=" text-center">
                                    <a href="{{route('form.index')}}" class="px-4 py-2.5 rounded-lg outline-none bg-blue-600 text-white transition hover:bg-blue-700 focus:bg-blue-500">
                                        Retour
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
@endif
   
@if($form_view)
    <section class="mt-10 md:mt-12">
        <div class="px-4 sm:px-10 md:px-12 lg:px-10 max-w-4xl mx-auto w-full">
            <div class="pb-10">
                <h1 class="text-2xl font-bold text-gray-900">
                    Formulaire de demande d'inscription
                </h1>
                <p class="text-xl font-bold text-gray-900">Annee scolaire : 2023-2024(+243 971 06 495)</p>
            </div>
            <div class="bg-white rounded-3xl p-6 sm:p-10 lg:p-12 border border-gray-200">
                <h2 class="text-xl font-bold text-gray-900 mb-5">
                    IDENTITE DE L'ELEVE
                </h2>
                <div class="">
                    <div class="grid gap-6 sm:grid-cols-2">
                        <div class="space-y-2">
                            <label for="name" class="text-gray-600">Nom complet</label>
                            <input  wire:model.defer='st_name' type="text" name="name" id="name" autocomplete="name"
                                placeholder=" Ex Guy kode"
                                class="peer outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:border-2 invalid:border-red-400 focus:border-blue-400  @error('st_name') is-invalid @enderror" />

                            @error('st_name') <span class="text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="text-gray-600">Genre</label>
                            <select wire:model.defer='st_sexe' name="" id=""
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400  @error('st_sexe') is-invalid @enderror">
                                <option value="">---Sexe ---</option>
                                <option value="masculin">Masculin</option>
                                <option value="feminin">Feminin</option>
                            </select>
                            @error('st_sexe') <span class="text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="name" class="text-gray-600">Date de naissance</label>
                            <input wire:model.defer='st_birthdate' type="date" name="name" id="name" autocomplete="name"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400  @error('st_birthdate') is-invalid @enderror" />
                        </div>
                       
                        <div class="space-y-2">
                            <label for="email" class="text-gray-600">Lieu de naissance</label>
                            <input wire:model.defer='st_birthdayplace' type="text" name="name" id="name" autocomplete="name"
                                placeholder="Lubumbashi"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400  @error('st_birthdayplace') is-invalid @enderror" />
                            @error('st_birthdayplace') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="text-gray-600">Langue(s) parlée(s) </label>
                            <input wire:model.defer='st_spoken' type="text" name="name" id="name" autocomplete="name"
                                placeholder="Swahili, Francais, Anglais"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400  @error('st_spoken') is-invalid @enderror" />
                            @error('st_spoken') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="email" class="text-gray-600">Telephone </label>
                            <input wire:model.defer='st_phone' type="tel" name="name" id="name" autocomplete="name"
                                placeholder="+243 09 76 93 80 94"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400  @error('st_phone') is-invalid @enderror" />
                            @error('st_phone') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="province-origine" class="text-gray-600">Province d'origine * </label>
                            <input wire:model.defer='st_province' type="text" name="province-origine" id="province-origine"
                                autocomplete="province-origine" placeholder="Province "
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('st_province') is-invalid @enderror" />
                            @error('st_province') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-2">
                            <label for="district-origine" class="text-gray-600">District d'origine * </label>
                            <input wire:model.defer='st_district' type="text" name="district-origine" id="district-origine"
                                autocomplete="district-origine" placeholder="District"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('st_district') is-invalid @enderror" />
                            @error('st_district') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>


                        <div class="space-y-2">
                            <label for="pays-origine" class="text-gray-600">Pays d'origine :* </label>
                            <input wire:model.defer='st_pays' type="text" name="pays-origine" id="pays-origine"
                                autocomplete="pays-origine" placeholder="Pays d'origine" 
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('st_pays') is-invalid @enderror" />
                            @error('st_pays') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2 sm:col-span-2">
                            <label for="adresse-p" class="text-gray-600">Adresse physique de l'éléve </label>
                            <input wire:model='st_addres' type="text" name="adresse-p" id="adresse-p"
                                autocomplete="adresse-p" placeholder="Q/Kasapa, Av circulaire, No 293"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('st_addres') is-invalid @enderror" />
                            @error('st_addres') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-10 lg:p-12 border border-gray-200">
                <h2 class="text-xl font-bold text-gray-900 mb-5">
                    IDENTITE DES RESPONSABLES
                </h2>
                <div class="">
                    <div class="grid gap-6 sm:grid-cols-2">
                        <div class="space-y-2">
                            <label for="name-father" class="text-gray-600">Noms du titeur:*</label>
                            <input wire:model.defer='first_parent_name' type="text" name="name-father" id="name-father"
                                autocomplete="name" placeholder="Nom titeur"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('first_parent_name') is-invalid @enderror" />
                            @error('first_parent_name') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="name-mother" class="text-gray-600">Nom du second tuteur:*</label>
                            <input wire:model.defer='second_parent_name' type="text" name="name-mother" id="name-mother"
                                autocomplete="name" placeholder="Nom tuteur "
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('second_parent_name') is-invalid @enderror" />
                            @error('second_parent_name') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="contact1" class="text-gray-600">Contact Tuteur</label>
                            <input wire:model.defer='first_contact' type="tel" name="contact1" id="contact1"
                                autocomplete="name" placeholder="Contact tuteur 1"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('first_contact') is-invalid @enderror" />
                            @error('first_contact') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="contact2" class="text-gray-600">Contact Second Tuteur</label>
                            <input wire:model.defer='second_contact' type="tel" name="contact2" id="contact2"
                                autocomplete="name" placeholder="Nom tuteur 2"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400  " />
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-10 lg:p-12 border border-gray-200">
                <h2 class="text-xl font-bold text-gray-900 mb-5">
                    SOLLICITATION
                </h2>
                <div class="">
                    <div class="grid gap-6 sm:grid-cols-2">
                        <div class="space-y-2">
                            <label for="name-father" class="text-gray-600">Sections :*</label>
                            <select wire:change='section()' wire:model="section" name="" id=""
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('st_phone') is-invalid @enderror ">
                                <option value="" selected>-- Selectionnez une Section --</option>
                                <option value="1">Creche</option>
                                <option value="2">Pre-mat</option>
                                <option value="3">Maternelle</option>
                                <option value="4">Primaire</option>
                                <option value="5">EB</option>
                                <option value="6">Secondaire General</option>
                                <option value="7">Secondaire Technique</option>
                            </select>
                            @error('section') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror

                        </div>
                        <div class="space-y-2">
                            <label for="name-mother" class="text-gray-600">Option :*</label>

                            <select wire:model='options_values'
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('st_phone') is-invalid @enderror  ">
                                <option value="" selected>----Selectionnez une option-----</option>
                                @foreach($section_values as $option)
                                <option value="{{$option}}">{{$option}}</option>
                                @endforeach
                            </select>
                            @error('options_values') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror



                        </div>
                        <div class="space-y-2">
                            <label for="contact1" class="text-gray-600">Classe : *</label>
                            <select wire:model="classe" name="" id=""
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400 @error('classe') is-invalid @enderror ">
                                <option value="" selected>-- Selectionnez une classe --</option>

                                @foreach($classe_values as $classe)
                                <option>{{$classe}}</option>
                                @endforeach

                            </select>
                            @error('classe') <span class=" text-sm text-red-600 peer-invalid:block">{{ $message }}</span> @enderror
                        </div>

                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-10 lg:p-12 border border-gray-200">
                <h2 class="text-xl font-bold text-gray-900 mb-5">
                    SANTE
                </h2>
                <div class="">
                    <div class="grid ">
                        <div class="space-y-2">
                            <label for="name-father" class="text-gray-600">Maladie(s) chronique(s) ou allergie(s) à
                                signaler
                                :</label>
                            <input wire:model="health" type="text" name="name-father" id="name-father"
                                autocomplete="name" placeholder="Allergies"
                                class="outline-none block w-full rounded-xl border-2 border-gray-100 bg-gray-100 px-4 py-2.5 text-sm md:text-base text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:border-blue-400" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="button" wire:click="store()"
                    class="px-4 py-2.5 rounded-lg outline-none bg-blue-600 text-white transition hover:bg-blue-700 focus:bg-blue-500">
                    Enregistrer
                </button>
            </div>

        </div>
    </section>
    @endif
</div>
