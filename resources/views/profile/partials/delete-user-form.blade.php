<div class="xwrapper">
    <section>
        <header>
            <h2>
                {{ __('Delete Account') }}
            </h2>

            <p>
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before
                deleting your account, please download any data or information that you wish to retain.') }}
            </p>
        </header>

        <form id="deleteAccountForm" method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <div class="input-field">
                <label for="password" value="{{ __('Password') }}" ></label>
                <input id="password" name="password" type="password" placeholder="{{ __('Password') }}" />
                <x-input-error :messages="$errors->userDeletion->get('password')" />
            </div>

            <button type="submit">{{ __('Delete Account') }}</button>
        </form>

        <div id="confirmUserDeletionModal" class="modal" style="display: none;">
            <h3>
                {{ __('Are you sure you want to delete your account?') }}
            </h3>

            <p>
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.
                Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="input-field">
                <label for="modalPassword" value="{{ __('Password') }}" ></label>
                <input id="modalPassword" name="modalPassword" type="text" placeholder="{{ __('Password') }}" />
                <x-input-error :messages="$errors->userDeletion->get('modalPassword')" />
            </div>

            <button type="button" onclick="closeModal()">{{ __('Cancel') }}</button>
            <button type="button" onclick="submitFormAndOpenModal()">{{ __('Delete Account') }}</button>
        </div>
    </section>
</div>

<script>
    function closeModal() {
        document.getElementById('confirmUserDeletionModal').style.display = 'none';
    }

    function submitFormAndOpenModal() {
        var password = document.getElementById('password').value;

        document.getElementById('deleteAccountForm').submit();

        document.getElementById('confirmUserDeletionModal').style.display = 'block';
    }
</script>
