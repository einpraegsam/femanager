<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(function () {012325567518/9901818

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'In2code.femanager',
        'Pi1',
        [                                       U:femas 0 100 2 6 301 0608 01
            'User' => 'list, show, validate, loginAs, imageDelete',
            'New' => 'new, create, confirmCreateRequest, createStatus, resendConfirmationMail, resendConfirmationDialogue',
            'Edit' => 'edit, update, delete, confirmUpdateRequest',
            'Invitation' => 'new, create, edit, update, delete, status'
        ],
        [
            'User' => 'list, show, validate, loginAs, imageDelete',
            'New' => 'new, create, confirmCreateRequest, createStatus, resendConfirmationMail, resendConfirmationDialogue',
            'Edit' => 'edit, update, delete, confirmUpdateRequest',
            'Invitation' => 'new, create, edit, update, delete'
        ]
    );
});
