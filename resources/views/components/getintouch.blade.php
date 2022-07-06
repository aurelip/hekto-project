    <!--get in Touch-->

    <div class="lg:flex">
        <div class="lg:ml-96 mx-5 ">
            <h1 class="aureli papers lg:text-4xl font-bold mt-32">Get In Touch</h1>
            <p class="eko mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis neque ultrices<br>
                tristique amet erat vitae eget dolor los vitae lobortis quis bibendum quam.</p>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                {{ csrf_field() }}
                <div>
                    <input class="mt-8 pl-3 border-2 lg:w-64 w-40 h-12" type="text" placeholder="Your Name*"
                        name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                    <input class="ml-4 pl-3 border-2 lg:w-64 w-40 h-12" type="text" name="email"
                        placeholder="Your E-mail*" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div>
                    <input class="mt-10 pl-3 border-2 lg:w-[534px] w-96 h-[45px]" type="text" name="subject"
                        value="{{ old('subject') }}" placeholder="Subject*">
                    @if ($errors->has('subject'))
                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                    @endif
                </div>
                <div>
                    <input class="pl-3 pt-1 border-2 lg:w-[534px] w-96 h-[166px] mt-12" type="text" name="message"
                        placeholder="Type Your Message*">
                    @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                </div>
                <div class="">
                    <button class="bg-[#FB2E86] hover:bg-pink-800 w-32 h-10 text-white mt-8">Send Mail</button>
                </div>


            </form>
            {{-- <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                {{ csrf_field() }}
                <input class="mt-8 pl-3 border-2 lg:w-64 w-40 h-12" type="text" placeholder="Your Name*" name="name"
                    value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <input class="ml-4 pl-3 border-2 lg:w-64 w-40 h-12" type="text" name="" id=""
                    placeholder="Your E-mail*">
                <div> <input class="mt-10 pl-3 border-2 lg:w-[534px] w-96 h-[45px]" type="text" name=""
                        id="" placeholder="Subject*"></div>
                <div><input class="pl-3 pt-1 border-2 lg:w-[534px] w-96 h-[166px] mt-12" type="text" name=""
                        id="" placeholder="Type Your Message*"></div>
                <button class="bg-[#FB2E86] hover:bg-pink-800 w-32 h-10 text-white mt-8">Send Mail</button>
            </form> --}}
        </div>
        <img class="mt-36 hidden xl:block" src="img\Group124.png" alt="">
    </div>
