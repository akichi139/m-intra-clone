<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col">
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                <h6 class="mb-0 text-muted">{{ $this->getTotalCartItems() }} items</h6>
                            </div>
                            <hr class="my-4">
                            <div class="overflow-auto" style="max-height: 500px;">
                                @foreach($this->getCartItems() as $item)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                        class="img-fluid rounded-3" alt="Shopping item"
                                                        style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5>{{ $item->name }}</h5>
                                                    <p class="small mb-0">256GB, Navy Blue</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0">{{ $item->qty }}</h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">THB {{ $item->price * $item->qty }}</h5>
                                                </div>
                                                <button wire:click.prevent="removeFromCart('{{ $item->rowId }}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash3-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 text-white" style="background-color: gray; border-radius: 5px;">
                        <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                            <hr class="my-4">

                            <div class="d-flex justify-content-between mb-4">
                                <h5 class="text-uppercase">items {{ $this->getTotalCartItems() }}</h5>
                                <h5>THB {{ $this->getSubTotalPrice() }}</h5>
                            </div>

                            <h5 class="text-uppercase mb-3">Promotion</h5>

                            <div class="mb-4 pb-2">
                                <select class="select">
                                    <option value="1">one</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                </select>
                            </div>

                            <h5 class="text-uppercase mb-3">Give code</h5>

                            <div class="form-outline">
                                <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <h6 style="color: #fff;">tax :7%</h6>
                                <h6 style="color: #fff;">{{ $this->getTax() }}</h6>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-between mb-5">
                                <h5 class="text-uppercase">Total price</h5>
                                <h5>THB {{ $this->getTotalPrice() }}</h5>
                            </div>

                            <div class="d-flex justify-content-end">
                                <a href="{{ route('auth_saleOrder') }}" type="button"
                                    class="btn btn-dark btn-block btn-lg">
                                    Check Out →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>