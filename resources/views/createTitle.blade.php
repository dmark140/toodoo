<tr>
    <td class="border-y  min-w-[50px]  " colspan="2">
        <form action="{{ route('title.create') }}" method="post" class="flex min-w-[480] p-0 m-0">
            @csrf
            <input class="form-control w-full active:border-none border-none  px-2" placeholder="enter a title here"
                id="title" name ="title" />
            <button type="submit" class="hover:bg-gray-200  text-left px-4 whitespace-nowrap">Post Group</button>
        </form>
    </td>
    @error('title')
        <span class="text-red-300 ">{{ $message }}</span>
    @enderror
</tr>



{{-- <button onclick="ShowModal()">The time is?</button>

<script>
    function ShowModal() {
        var element = document.getElementById("AddTitleModal");
        element.classList.remove("hidden");
    }

    function HideModal() {
        var element = document.getElementById("AddTitleModal");
        element.classList.add("hidden");
    }
</script> --}}
