/* eslint-env browser */
/* globals test_DIST_PATH */

/** Dynamically set absolute public path from current protocol and host */
if (test_DIST_PATH) {
  __webpack_public_path__ = test_DIST_PATH; // eslint-disable-line no-undef, camelcase
}
