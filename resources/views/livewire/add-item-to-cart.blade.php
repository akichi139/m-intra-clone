<div>
    <div class="input-group">
        <button class="btn btn-outline-secondary" wire:click="decrement" wire:disabled="isQuantityOne">-</button>
        <input type="text" class="form-control text-center" wire:model="quantity" style="max-width: 50px;">
        <button class="btn btn-outline-secondary" wire:click="increment">+</button>
    </div>
    <button class="buy--btn mt-4" wire:click="addToCart">ADD TO CART</button>
</div>
