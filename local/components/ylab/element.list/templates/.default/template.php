<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

?>
<div class="list">
    <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
        <div>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.NAME') ?> <?= $arItem['NAME'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.PRICE') ?> <?= $arItem['PRICE'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.PERCENT') ?> <?= $arItem['PERCENT'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.TOTAL') ?> <?= $arItem['TOTAL'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.STATUS') ?> <?= $arItem['STATUS'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.WEIGHT') ?> <?= $arItem['WEIGHT'] ?></p>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.NOMENCLATURE') ?> <?= $arItem['NOMENCLATURE'] ?></p>
            <p><b><?= Loc::getMessage('YLAB.ELEMENT.LIST.ORDER') ?></b></p>
            <?php foreach ($arItem['ORDER'] as $item) { ?>
            <p><?= Loc::getMessage('YLAB.ELEMENT.LIST.ORDER.CODE') ?> <?= $item['UF_CODE'] ?>
            <?= Loc::getMessage('YLAB.ELEMENT.LIST.ORDER.SUM') ?> <?= $item['UF_SUM'] ?> </p>
            <?php } ?>
        </div>
        <hr>
    <?php } ?>
</div>