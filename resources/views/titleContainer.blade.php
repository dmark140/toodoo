<tr>
    <td class="  min-w-[50px]">&nbsp;</td>
</tr>
<tr>
    <td class="  min-w-[50px]"></td>
    <td class=" px-4 w-full font-semibold">
        <div class="flex ">
            <form action="{{ route('title.put', $titleUuid) }}" method="POST" class=" flex w-full p-0 m-0">
                @method('put')
                @csrf
                <input class="w-full hover:cursor-cell" name="title" value="{{ $title }}" />
                <button type="post" class="mx-2">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.2322 5.76777C15.2085 4.79146 16.7915 4.79146 17.7678 5.76777L18.4749 6.47487C19.4512 7.45118 19.4512 9.0341 18.4749 10.0104L10.3431 18.1421L7.10051 18.1421C6.54822 18.1421 6.1005 17.6944 6.10051 17.1421L6.10051 13.8995L14.2322 5.76777ZM16.3536 7.18198L17.0607 7.88909C17.2559 8.08435 17.2559 8.40093 17.0607 8.59619L16 9.65685L14.5858 8.24264L15.6464 7.18198C15.8417 6.98672 16.1583 6.98672 16.3536 7.18198ZM14.5858 11.0711L9.51472 16.1421L8.10051 16.1421L8.10051 14.7279L13.1716 9.65685L14.5858 11.0711Z"
                            fill="#000000" />
                    </svg>
                </button>
            </form>
            <form action="{{ route('title.destroy', $titleUuid) }}" method="POST" class="p-0 m-0 float-right">
                @method('delete')
                @csrf
                <button type="post">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18"
                        viewBox="0 0 30 30">
                        <path
                            d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z">
                        </path>
                    </svg>
                </button>
            </form>

        </div>
    </td>
    </td>
</tr>
<tr>
    <td class="  min-w-[50px]"></td>
    <td class=" px-4 w-full font-semibold"> @include('createNote', ['id' => $titleUuid]) </td>
    </td>
</tr>
