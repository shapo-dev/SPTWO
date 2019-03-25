{namespace name="frontend/detail/tabs/custom_tabs"}

<div class="buttons--off-canvas">
    <a class="close--off-canvas" href="#">
        <i class="icon--arrow-left"></i>
        Zurück
    </a>
</div>
<div class="content--description">
    {* Product description *}
    {block name='frontend_detail_description_text'}
        <div class="product--description" itemprop="description">
            <table class="options">
                <tbody>
                {if $sArticle.article_details}
                    <tr class="even">
                        <th class="label">Details</th>
                        <td class="data last">{$sArticle.article_details}</td>
                    </tr>
                {/if}
                {if $sArticle.article_dosierung}
                    <tr class="even">
                        <th class="label">Dosierung</th>
                        <td class="data last">{$sArticle.article_dosierung}</td>
                    </tr>
                {/if}
                {if $sArticle.article_hinweise}
                    <tr class="even">
                        <th class="label">Hinweise</th>
                        <td class="data last">{$sArticle.article_hinweise}</td>
                    </tr>
                {/if}
                {if $sArticle.article_inhaltsstoffe}
                    <tr class="even">
                        <th class="label">Inhaltsstoffe</th>
                        <td class="data last">{$sArticle.article_inhaltsstoffe}</td>
                    </tr>
                {/if}
                {if $sArticle.article_hinweistext}
                    <tr class="last even">
                        <th class="label">Warnhinweistext</th>
                        <td class="data last">{$sArticle.article_hinweistext}</td>
                    </tr>
                {/if}
                </tbody>
            </table>
        </div>
    {/block}
</div>