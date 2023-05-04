<!DOCTYPE html>
<html lang="en" class="font-sans scro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tailwind css cdn  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>To do List</title>
</head>

<style>
    *{
        font-family: sans-serif;
    }
</style>
<body  class="bg-slate-50">
     <!-- this is to do list section -->
     <header>
        <h1 class="text-center text-4xl text-slate-600 mt-10 font-bold">
            TO DO LIST
        </h1>
     </header>
    <main class="max-w-7xl mx-auto mt-10 md:mt-16 lg:mt-20">
        <!-- for user input to collect category name and job's name -->
        <section class="bg-slate-100 rounded-2xl shadow-xl border border-slate-200 p-8 md:p-14 lg:p-20">
            <!-- this is heading section  -->
            <article class="md:flex justify-between">
                <section>
                    <h1 class="text-3xl font-bold text-slate-600 ">Welcome back,Haru</h1>
                    <p class="text-slate-500 mt-1 md:mt-3">
                        Your've got
                        7
                        tasks coming up in the next days.
                    </p>
                </section>
                <section>
                    <button id="addBtn" class="bg-blue-500 z-20 text-white text-sm md:text-md px-3 py-2 md:px-5 md:py-3 rounded-xl shadow-md mt-5 md:mt-0">Add New Tasks...</button>
                </section>
            </article>
            <!--  -->

            <!-- this is add new btn and show your job to do list  -->
            <article class="mt-10">

                <!-- this is list item start  -->
                <div class="bg-white rounded-xl px-6 py-4 md:px-10 md:py-8 lg:px-16 lg:py-10 shadow-md mt-8 lg:mt-10">
                    <!-- this is title  -->
                    <h1 class="text-xl font-bold text-slate-600">Design your projects.</h1>
                    <p class="mt-2 md:mt-3 text-sm md:text-md text-slate-500">
                        By the time a prospets arrvies at your sign up page in most cases , they've already evaluate.
                    </p>
                    <div class="flex justify-between mt-10">
                        <!-- This is category -->
                        <div class="border rounded-xl px-2 p-1 md:p-2 text-sm shadow-md">
                            <i class="fa-solid fa-pen-nib text-slate-700"></i>
                            Design
                        </div>
                        <!--  -->

                        <!-- edit and delete section  -->
                        <div class="flex gap-x-3 items-center">
                            <button onclick="showEditModal()" class=" w-6 h-6 text-sm md:text-md md:w-8 md:h-8 flex justify-center items-center rounded-md bg-slate-500 text-white shadow-md">
                                <i class="fas fa-edit"></i>
                            </button>
                            <a href="" class="w-6 h-6 text-sm md:text-md md:w-8 md:h-8 flex justify-center items-center rounded-md bg-red-500 text-white shadow-md">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- this is list end  -->

                <!-- this is list item start  -->
                <div class="bg-white rounded-xl px-6 py-4 md:px-10 md:py-8 lg:px-16 lg:py-10 shadow-md mt-8 lg:mt-10">
                    <!-- this is title  -->
                    <h1 class="text-xl font-bold text-slate-600">Design your projects.</h1>
                    <p class="mt-2 md:mt-3 text-sm md:text-md text-slate-500">
                        By the time a prospets arrvies at your sign up page in most cases , they've already evaluate.
                    </p>
                    <div class="flex justify-between mt-10">
                        <!-- This is category -->
                        <div class="border rounded-xl px-2 p-1 md:p-2 text-sm shadow-md">
                            <i class="fa-solid fa-pen-nib text-slate-700"></i>
                            Design
                        </div>
                        <!--  -->

                        <!-- edit and delete section  -->
                        <div class="flex gap-x-3 items-center">
                            <button onclick="showEditModal()" class=" w-6 h-6 text-sm md:text-md md:w-8 md:h-8 flex justify-center items-center rounded-md bg-slate-500 text-white shadow-md">
                                <i class="fas fa-edit"></i>
                            </button>
                            <a href="" class="w-6 h-6 text-sm md:text-md md:w-8 md:h-8 flex justify-center items-center rounded-md bg-red-500 text-white shadow-md">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- this is list end  -->

                <!-- this is list item start  -->
                <div class="bg-white rounded-xl px-6 py-4 md:px-10 md:py-8 lg:px-16 lg:py-10 shadow-md mt-8 lg:mt-10">
                    <!-- this is title  -->
                    <h1 class="text-xl font-bold text-slate-600">Design your projects.</h1>
                    <p class="mt-2 md:mt-3 text-sm md:text-md text-slate-500">
                        By the time a prospets arrvies at your sign up page in most cases , they've already evaluate.
                    </p>
                    <div class="flex justify-between mt-10">
                        <!-- This is category -->
                        <div class="border rounded-xl px-2 p-1 md:p-2 text-sm shadow-md">
                            <i class="fa-solid fa-pen-nib text-slate-700"></i>
                            Design
                        </div>
                        <!--  -->

                        <!-- edit and delete section  -->
                        <div class="flex gap-x-3 items-center">
                            <button onclick="showEditModal()" class=" w-6 h-6 text-sm md:text-md md:w-8 md:h-8 flex justify-center items-center rounded-md bg-slate-500 text-white shadow-md">
                                <i class="fas fa-edit"></i>
                            </button>
                            <a href="" class="w-6 h-6 text-sm md:text-md md:w-8 md:h-8 flex justify-center items-center rounded-md bg-red-500 text-white shadow-md">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- this is list end  -->



            </article>
            <!--  -->
        </section>
        <!--  -->
    </main>
    <!--  -->

    <!-- this is for modal create section  -->
    <div id="modalCreate" class="opacity-0 pointer-events-none duration-500" >
        <section class="fixed  top-0 w-full h-full  flex justify-center items-center bg-black/20">
            <article id="modalCreateDisplay" class="rounded-2xl px-8 py-6 md:px-14 md:py-10 lg:px-20 lg:py-16 shadow-2xl bg-slate-50 w-[900px] duration-500 translate-y-[-120%]">
                <div class="flex justify-end">
                    <button  class="closeCreateModalBtn w-8 md:w-10 h-8 md:h-10 flex justify-center items-center shadow-xl text-white bg-red-500 rounded-full">
                        <i class="fas fa-xmark"></i>
                    </button>
                </div>
                <h1 class="text-3xl text-center text-slate-600">Create New Lists</h1>
                <form class="mt-10" action="{{route('todoList#create')}}" method="POST">
                    @csrf
                    <div class="">
                        <label for="category" class="text-slate-600 text-sm">Category</label><br>
                        <input id="category" type="text" name="category" class="px-3 py-1 text-md md:px-5 md:py-2 rounded-xl shadow-md md:text-lg w-full focus:outline-0 focus:ring-1 focus:ring-blue-300" placeholder="Enter Category...">
                    </div>
                    <div class="mt-8">
                        <label for="title" class="text-slate-600 text-sm">Title</label><br>
                        <input id="title" type="text" name="title" class="px-3 py-1 text-md md:px-5 md:py-2 rounded-xl shadow-md md:text-lg w-full focus:outline-0 focus:ring-1 focus:ring-blue-300" placeholder="Enter Title...">
                    </div>
                    <div class="mt-8">
                        <label for="description" class="text-slate-600 text-sm">Description</label><br>
                        <textarea name="description" class="px-3 py-1 text-md md:px-5 md:py-2 rounded-xl shadow-md md:text-lg w-full focus:outline-0 focus:ring-1 focus:ring-blue-300" placeholder="Enter Description..." id="description" cols="30" rows="5"></textarea>
                    </div>
                    <div class="flex justify-end mt-10">
                        <button type="submit" class="bg-blue-500 text-white px-4 text-sm md:text-md py-2 md:px-6 md:py-3 shadow-xl rounded-2xl">
                            <i class="fas fa-plus"></i>
                            Add
                        </button>
                    </div>
                </form>
            </article>
        </section>
        <!--  -->
    </div>
    <!--  -->

    <!-- this is for modal edit section  -->
    <div id="modalEdit" class="opacity-0 pointer-events-none duration-500" >
        <section class="fixed  top-0 w-full h-full  flex justify-center items-center bg-black/20">
            <article id="modalEditDisplay" class="rounded-2xl px-8 py-6 md:px-14 md:py-10 lg:px-20 lg:py-16 shadow-2xl bg-slate-50 w-[900px] duration-500 translate-y-[-120%]">
                <div class="flex justify-end">
                    <button  class="closeEditModalBtn w-8 md:w-10 h-8 md:h-10 flex justify-center items-center shadow-xl text-white bg-red-500 rounded-full">
                        <i class="fas fa-xmark"></i>
                    </button>
                </div>
                <h1 class="text-3xl text-center text-slate-600">Edit List</h1>
                <form class="mt-10" action="">
                    <div class="mt-8">
                        <label for="Category" class="text-slate-600 text-sm">Category</label><br>
                        <input id="Category" type="text" class="px-3 py-1 text-slate-600 text-md md:px-5 md:py-2 rounded-xl shadow-md md:text-lg w-full focus:outline-0 focus:ring-1 focus:ring-blue-300" placeholder="Enter Category...">
                    </div>
                    <div class="mt-8">
                        <label for="title" class="text-slate-600 text-sm">Title</label><br>
                        <input id="title" type="text" class="px-3 py-1 text-slate-600 text-md md:px-5 md:py-2 rounded-xl shadow-md md:text-lg w-full focus:outline-0 focus:ring-1 focus:ring-blue-300" placeholder="Enter Title...">
                    </div>
                    <div class="mt-8">
                        <label for="description" class="text-slate-600 text-sm">Description</label><br>
                        <textarea name="" class="px-3 py-1 text-slate-600 text-md md:px-5 md:py-2 rounded-xl shadow-md md:text-lg w-full focus:outline-0 focus:ring-1 focus:ring-blue-300" placeholder="Enter Description..." id="description" cols="30" rows="5"></textarea>
                    </div>
                    <div class="flex justify-end mt-10">
                        <button type="submit" class="bg-blue-500 text-white px-4 text-sm md:text-md py-2 md:px-6 md:py-3 shadow-xl rounded-2xl">
                            <i class="fas fa-plus"></i>
                            Update
                        </button>
                    </div>
                </form>
            </article>
        </section>
        <!--  -->
    </div>
    <!--  -->

    <!-- for create success -->
    @if (session("alertSuccessDisplay"))
        <div  class="alertSuccessDisplay duration-500 fixed top-20 left-0 w-full flex justify-center ">
            <div class="text-center px-8 py-5 text-lg md:px-10 md:py-5 text-green-600 md:text-2xl bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl border border-green-500/50">
                <div class="flex justify-end relative">
                    <button  class="closeSuccessAlert w-6 h-6 md:w-8 md:h-8 absolute top-0 right-[-10px] lg:top-[-10px] lg:right-[-30px] flex justify-center items-center border bg-red-400 text-white shadow-xl  rounded-full text-sm">
                        <i class="fas fa-xmark"></i>
                    </button>
                </div>
                <div class="flex items-center gap-x-4 mt-5">
                    <div class="w-10 h-10 md:w-16 md:h-16 rounded-full shadow-xl border border-green-500 flex justify-center items-center">
                        <i class="fas fa-check text-2xl"></i>
                    </div>
                    <span>{{session("alertSuccessDisplay")}}</span>
                </div>
            </div>
        </div>
    @endif
    <!--  -->

    <!-- for edit success -->
    {{-- <div  class="alertEditDisplay duration-500 fixed top-60 left-0 w-full flex justify-center ">
        <div class="text-center px-8 py-5 text-lg md:px-10 md:py-5 text-green-600 md:text-2xl bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl border border-green-500/50">
            <div class="flex justify-end relative">
                <button  class="closeEditAlert w-6 h-6 md:w-8 md:h-8 absolute top-0 right-[-10px] lg:top-[-10px] lg:right-[-30px] flex justify-center items-center border bg-red-400 text-white shadow-xl  rounded-full text-sm">
                    <i class="fas fa-xmark"></i>
                </button>
            </div>
            <div class="flex items-center gap-x-4 mt-5">
                <div class="w-10 h-10 md:w-16 md:h-16 rounded-full shadow-xl border border-green-500 flex justify-center items-center">
                    <i class="fas fa-check text-2xl"></i>
                </div>
                <span>Edit Successfully...</span>
            </div>
        </div>
    </div> --}}
    <!--  -->

    <!-- for delete success -->
    {{-- <div  class="alertDeleteDisplay duration-500 fixed top-96 left-0 w-full flex justify-center ">
        <div class="text-center px-8 py-5 text-lg md:px-10 md:py-5 text-red-600 md:text-2xl bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl border border-red-500/50">
            <div class="flex justify-end relative">
                <button  class="closeDeleteAlert w-6 h-6 md:w-8 md:h-8 absolute top-0 right-[-10px] lg:top-[-10px] lg:right-[-30px] flex justify-center items-center border bg-red-400 text-white shadow-xl  rounded-full text-sm">
                    <i class="fas fa-xmark"></i>
                </button>
            </div>
            <div class="flex items-center gap-x-4 mt-5">
                <div class="w-10 h-10 md:w-16 md:h-16 rounded-full shadow-xl border border-red-500 flex justify-center items-center">
                    <i class="fas fa-check text-2xl"></i>
                </div>
                <span>Delete Successfully...</span>
            </div>
        </div>
    </div> --}}
    <!--  -->

</body>
<script>

    // btn decelaration
    let addBtn = document.getElementById('addBtn')
    let showEditModalBtn = document.querySelector('.showEditModalBtn')

    let modalCreate = document.getElementById('modalCreate')
    let modalEdit = document.getElementById('modalEdit')

    let modalCreateDisplay = document.getElementById('modalCreateDisplay')
    let modalEditDisplay = document.getElementById('modalEditDisplay')

    let closeCreateModalBtn = document.querySelector('.closeCreateModalBtn')
    let closeEditModalBtn = document.querySelector('.closeEditModalBtn')

    let closeSuccessAlert = document.querySelector('.closeSuccessAlert')
    let closeEditAlert = document.querySelector('.closeEditAlert')
    let closeDeleteAlert = document.querySelector('.closeDeleteAlert')

    let alertSuccessDisplay = document.querySelector('.alertSuccessDisplay')
    let alertEditDisplay = document.querySelector('.alertEditDisplay')
    let alertDeleteDisplay = document.querySelector('.alertDeleteDisplay')

    //click addBtn to show modalCreate section
    addBtn.addEventListener('click' ,()=>{
        modalCreateDisplay.style.transform ="translateY(0)"
        modalCreate.style.opacity ='1'
        modalCreate.style.pointerEvents ="auto"
    })

    //show edit modal function
    function showEditModal(){
        modalEditDisplay.style.transform ="translateY(0)"
        modalEdit.style.opacity ='1'
        modalEdit.style.pointerEvents ="auto"
    }

    //click close btn to close create modal section
    closeCreateModalBtn.addEventListener('click' ,()=>{
        modalCreateDisplay.style.transform ="translateY(-120%)"
        modalCreate.style.opacity ='0'
        modalCreate.style.pointerEvents ="none"
    })

     //click close btn to close edit modal section
     closeEditModalBtn.addEventListener('click' ,()=>{
        modalEditDisplay.style.transform ="translateY(-120%)"
        modalEdit.style.opacity ='0'
        modalEdit.style.pointerEvents ="none"
    })

    //click closeAlert btn to close SuccessAlertDisplay
    closeSuccessAlert.addEventListener('click' ,()=>{
        hideAlert(alertSuccessDisplay)
    })

    //click closeAlertBtn to close EditAlertDisplay
    closeEditAlert.addEventListener('click' ,()=>{
        hideAlert(alertEditDisplay)
    })

    //click closeAlertBtn to close DeleteAlertDisplay
    closeDeleteAlert.addEventListener('click' ,()=>{
        hideAlert(alertDeleteDisplay)
    })

    //hide alert function
    function hideAlert(alertName){
        alertName.style.transform ="translateY(-120%)"
        alertName.style.opacity = '0'
        alertName.style.pointerEvents ="none"
    }

</script>
</html>
