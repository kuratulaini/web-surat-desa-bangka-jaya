@auth
<a href="{{ route('explore.pengajuan', $item->id) }}" class="inline-block px-3">
    <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">

        <!--Banner image-->
        <img class="rounded-2xl w-full"
            src="{{ url($item->photos) }}" alt="placeholder" />

        <!--Title-->
        <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
            {{ $item->nama_layanan }}
        </h1>
        <!--Description-->
        <div class="max-w-full">
            <?php //include 'components/rating.php'; ?>
        </div>

        <div class="text-center mt-5 flex justify-between w-full">
            <span
                class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                Perkiraan selesai:
            </span>
            <span
                class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                {{ $item->perkiraan_selesai }} Hari
            </span>
        </div>
    </div>
</a>
@endauth

@guest 
<a type="button" class="inline-block px-3" onclick="toggleModal('loginModal')">
    <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">

        <!--Banner image-->
        <img class="rounded-2xl w-full"
            src="{{ url($item->photos) }}" alt="placeholder" />

        <!--Title-->
        <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
            {{ $item->nama_layanan }}
        </h1>

        <!--Description-->
        <div class="max-w-full">
            <?php //include 'components/rating.php'; ?>
        </div>

        <div class="text-center mt-5 flex justify-between w-full">
            <span
                class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                Perkiraan selesai:
            </span>
            <span
                class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
                {{ $item->perkiraan_selesai }} Hari
            </span>
        
        </div>
    </div>
</a>
@endguest