.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt

.. _installation:

Installation
============
The extension needs to be installed as any other extension of TYPO3 CMS:

#. Switch to the module “Extension Manager”.

#. Get the extension

   #. **Get it from the Extension Manager:** Press the “Retrieve/Update”
      button and search for the extension key *nitsan_hellobar* and import the
      extension from the repository.

   #. **Get it from typo3.org:** You can always get current version from
      `http://typo3.org/extensions/repository/view/nitsan_hellobar/current/
      <http://typo3.org/extensions/repository/view/nitsan_hellobar/current/>`_ by
      downloading either the t3x or zip version. Upload
      the file afterwards in the Extension Manager.

#. The Extension Manager offers some basic configuration which is
   explained :ref:`here <extensionManager>`.

Preparation: Include static TypoScript
--------------------------------------

The extension ships some TypoScript code which needs to be included.

#. Switch to the root page of your site.

#. Switch to the **Template module** and select *Info/Modify*.

#. Press the link **Edit the whole template record** and switch to the tab *Includes*.

#. Select **NITSAN - API HelloBar.com (nitsan_hellobar)** at the field *Include static (from extensions):*

|img-plugin-ts|


.. _configuration:

Configuration
-------------

#. Go to Template > Root Page > Info/Modify > Edit Template > Includes > Include the static template called 'NITSAN - API HelloBar.com (nitsan_hellobar)'

|img-plugin-const|

#. Now Go to Constant Editor of your Root Page & Setup require code & other option.

|img-plugin-hellobar|