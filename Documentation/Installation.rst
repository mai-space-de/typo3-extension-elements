.. include:: /Includes.rst.txt

.. _installation:

============
Installation
============

Requirements
============

*  PHP 8.2 or later
*  TYPO3 CMS 13.4 LTS
*  `friendsoftypo3/visual-editor <https://github.com/FriendsOfTYPO3/visual-editor>`__ ^1.0

Composer Installation
=====================

Run the following command in your TYPO3 project root:

.. code-block:: bash

    composer require maispace/mai-elements

Activate the Extension
======================

The extension is activated automatically when installed via Composer. If you manage
extensions via the TYPO3 backend, activate ``mai_elements`` in the **Extension Manager**.

Include TypoScript
==================

The recommended way is to use the bundled **TYPO3 Site Set**. Add ``Elements`` to
the sets of your site configuration in ``config/sites/<your-site>/config.yaml``:

.. code-block:: yaml

    sets:
      - mai_elements/Elements

Alternatively, include the TypoScript setup manually:

.. code-block:: typoscript

    @import 'EXT:mai_elements/Configuration/TypoScript/setup.typoscript'

Page TSconfig
=============

Page TSconfig is provided via the Site Set and loaded automatically. To include it
manually, add the following to your page TSconfig:

.. code-block:: typoscript

    @import 'EXT:mai_elements/Configuration/page.tsconfig'
