<?php

// @todo Move this stuff to a bootloader if we get more files

define('DIR_TEMPLATE', dirname(__DIR__) . '/templates');

/**
 * Helper to easily include a template file from the templates folder
 */
function template(string $name): void {
    include DIR_TEMPLATE . "/$name.php";
}

?>
<html>
    <head>
        <title>Geodesic Solutions Community</title>
        <?php template('analytics') ?>
    </head>
    <body>
        <h1>Comming soon!</h1>
        <p>What:  This website is a new home for the former geodesicsolutions.com community, and a place to get the latest GeoCore software download for free and unencoded.
            The website is still being set up.</p>
        <p>As time allows, we will work on adding to this site:</p>
        <strong>Done:</strong>
        <ul>
            <li>Restored the wiki from a backup, updated it to latest dokuwiki version, and got it "mostly" working.  See <a href="/wiki">/wiki</a>!</li>
            <li>
                Gut the licensing from the encoded files and created a patch for the latest version to work <strong>with no ioncube needed or license checks</strong>.
                <br><br>
                <strong>Note:</strong> Provided as-is with no waranty of any kind, <strong>use at your own risk</strong>.
                <br><br>
                <strong>Instructions:</strong><br>
                Download the patch: <button onclick="downloadPatch('/patches/unencoded_unlicense_patch_18.02.0.bff354dbba748dd30c1d9a7d1ccc7dd61a1b95fc.zip')">download patch</button>
                <br><br>
                Unzip the downloaded file.
                <br><br>
                Before you upload any of these, if you already have the .unenc version of the files (not common), rename them so you have a backup of the old file.
                <br><br>
                <strong>Only use with 18.02.0 version!</strong> As time allows I'll make a thing to unlock old versions, if there is a need for it.  Let me know.
                <br><br>
                In the patch will be 3 files:
                <ul>
                    <li>products.unenc.php -> upload to /classes/php5_classes/ folder</li>
                    <li>DataAccess.class.unenc.php -> upload to /classes/php5_classes/ folder</li>
                    <li>updateFactory.unenc.php -> IGNORE!  Unless you are trying to update to 18.02.0, in which case,
                        upload to /upgrade/ folder then run the upgrade script.</li>
                </ul>
            </li>
        </ul>
        <br>
        <strong>Todo:</strong>
        <ul>
            <li>Also browse the wiki, check for other broken things caused by older dokuwiki plugins.</li>
            <li>Unlock keys that will enable older versions of the software to run on any domain</li>
            <li>Full source code for latest version, open source, no encoding at all, with licensing checks removed.
                <ul>
                    <li>This includes unreleased updates for a "next version" that was never officially released.  Includes: PHP 7.* fixes, update to stripe payments.</li>
                    <li>In future, maybe a github repo where anyone in the community can submit updates (that are reviewed).  For things like PHP8 compatibility.</li>
                </ul>
            </li>
            <li><strong>Wiki:</strong> Figure out why links are not parsing, they show as [[link]] instead of actually linking.</li>
            <li>See if I can find a copy of the old changelogs in wayback or something...<!-- then update the references to it --></li>
            <li>These are just the plans, no promises as it is done as time allows.</li>
        </ul>
        <h2>Geodesic Solutions, LLC. info:</h2>
        <p>The former company, <em>Geodesic Solutions, LLC.</em> is officially out of business.  It was a company that sold classifieds and auctions software called GeoCore.</p>
        <p>The geodesicsolutions.com website domain expired in July 2021.  We were able to contact one of the 3 owners who confirmed that the company is no longer in business.</p>

        <h2>geodesicsolutions.org info:</h2>
        <p>This website is for the Geodesic community itself, now that the company is shut down.</p>
        <p>This website is not affiliated with or run by the former <em>Geodesic Solutions, LLC.</em> company in any way.</p>
        <p>
            In the interest of transparency:
            This site and the source code on it are run by a former employee (known in Geo community as jonyo) who did more recent contract work for the company before it shut down.
            As result of that contract work, he still had full access to the latest un-encoded source code, along with a backup copy of the wiki.
            He was able to contact one of the owners to confirm that the company is indeed shut down, and as such, has permission to release the source code free and un-encoded.
        </p>
        <p>If you came here looking for domes, sorry, this is not the page you are looking for!  This is for the classified and auction software known as GeoCore.</p>
    </body>
</html>
