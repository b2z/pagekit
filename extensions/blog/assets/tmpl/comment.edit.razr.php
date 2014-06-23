<tr class="js-editor">
    <td colspan="5">
        <form class="uk-form uk-form-stacked" action="@url.route('@blog/comment/save')">

            <div class="uk-grid uk-grid-width-small-1-3" data-uk-grid-margin>
                <div>
                    <label for="form-author" class="uk-form-label">@trans('Name')</label>
                    <input id="form-author" class="uk-width-1-1" type="text" name="comment[author]" value="{{author}}">
                </div>
                <div>
                    <label for="form-email" class="uk-form-label">@trans('E-mail')</label>
                    <input id="form-email" class="uk-width-1-1" type="text" name="comment[email]" value="{{email}}">
                </div>
                <div>
                    <label for="form-comment" class="uk-form-label">@trans('URL')</label>
                    <input id="form-comment" class="uk-width-1-1" type="text" name="comment[url]" value="{{url}}">
                </div>
            </div>

            <div class="uk-grid uk-grid-width-1-1">
                <div>
                    <label for="form-content" class="uk-form-label">@trans('E-mail')</label>
                    <textarea id="form-content" class="uk-width-1-1" name="comment[content]" rows="6">{{content}}</textarea>
                </div>
            </div>

            <input type="hidden" name="id" value="{{id}}">
            @token()

            <p>
                <button class="uk-button uk-button-primary" type="submit">@trans('Submit')</button>
                <a href="#" class="uk-button cancel">@trans('Cancel')</a>
            </p>

        </form>
    </td>
</tr>