<tr class="">
    <td class=" min-w-[50px]  ">
    </td>

    <td class=" min-w-[50px]  ">
        <form action="{{ route('note.create') }}" method="post" class="flex">
            @csrf
            <input name="note" class="w-full  px-2" placeholder="enter a note here" />
            <input name="title_id" placeholder="enter a note here" value="{{ $id }}" class="hidden" />
            <button type="post" class="hover:bg-gray-200  text-left px-4 whitespace-nowrap">+ Note</button>
        </form>
    </td>
</tr>
@error('note')
    <span class="text-red-300 text-sm">{{ $message }}</span>
@enderror
