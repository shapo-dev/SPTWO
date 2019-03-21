{extends file="parent:frontend/detail/actions.tpl"}
{block name='frontend_detail_actions_notepad'}
    <form action="{url controller='note' action='add' ordernumber=$sArticle.ordernumber}" method="post" class="action--form">
        {s name="DetailLinkNotepad" assign="snippetDetailLinkNotepad"}{/s}
        <button type="submit"
           class="action--link link--notepad"
           title="{$snippetDetailLinkNotepad|escape}"
           data-ajaxUrl="{url controller='note' action='ajaxAdd' ordernumber=$sArticle.ordernumber}"
           data-text="{s name="DetailNotepadMarked"}{/s}">
            <i class="ti ti-heart"></i> <span class="action--text">{s name="DetailLinkNotepadShort"}{/s}</span>
        </button>
    </form>
{/block}
