import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";

// Third Party Libraries

/*
    Scrollbar Library
    @see https://github.com/Grsmto/simplebar
*/
import SimpleBar from "simplebar";

/*
    Code highlighting library
    Just for demo purpose only for highlighting code
    @see https://highlightjs.org/
*/
import hljs from "highlight.js/lib/core";
import xml from "highlight.js/lib/languages/xml";

/*
    Date Utility Library
    @see https://day.js.org/
*/
import dayjs from "dayjs";

/*
    Carousel Library
    @see https://swiperjs.com/
*/
import Swiper from "swiper/bundle";

/*
    Drag & Drop Library
    @see https://github.com/SortableJS/Sortable
*/
import Sortable from "sortablejs";

/*
    Charts Libraries
    @see https://apexcharts.com/
*/
import ApexCharts from "apexcharts";

/*
    Tables Libraries
    @see https://gridjs.io/
*/
import * as Gridjs from "gridjs";

//  Forms Libraries
import "@caneara/iodine"; // @see https://github.com/caneara/iodine
import * as FilePond from "filepond"; // @see https://pqina.nl/filepond/
import FilePondPluginImagePreview from "filepond-plugin-image-preview"; // @see https://pqina.nl/filepond/docs/api/plugins/image-preview/
import Quill from "quill"; // @see https://quilljs.com/
import flatpickr from "flatpickr"; // @see https://flatpickr.js.org/
import Tom from "tom-select/dist/js/tom-select.complete.min"; // @see https://tom-select.js.org/

// Import Fortawesome icons
import "@fortawesome/fontawesome-free/css/all.css";

// Helper Functions
import * as helpers from "./utils/helpers";

// Pages Scripts
import * as pages from "./pages";

// Global Store
import store from "./store";

// Breakpoints Store
import breakpoints from "./utils/breakpoints";

// Alpine Components
import usePopper from "./components/usePopper";
import accordionItem from "./components/accordionItem";

// Alpine Directives
import tooltip from "./directives/tooltip";
import inputMask from "./directives/inputMask";

// Alpine Magic Functions
import notification from "./magics/notification";
import clipboard from "./magics/clipboard";

// Register HTML, XML language for highlight.js
// Just for demo purpose only for highlighting code
hljs.registerLanguage("xml", xml);
hljs.configure({ ignoreUnescapedHTML: true });

// Register plugin image preview for filepond
FilePond.registerPlugin(FilePondPluginImagePreview);

window.hljs = hljs;
window.dayjs = dayjs;
window.SimpleBar = SimpleBar;
window.Swiper = Swiper;
window.Sortable = Sortable;
window.ApexCharts = ApexCharts;
window.Gridjs = Gridjs;
window.FilePond = FilePond;
window.flatpickr = flatpickr;
window.Quill = Quill;
window.Tom = Tom;

window.Alpine = Alpine;
window.Livewire = Livewire;
window.helpers = helpers;
window.pages = pages;

document.addEventListener("alpine:init", () => {
    Alpine.directive("tooltip", tooltip);
    Alpine.directive("input-mask", inputMask);

    Alpine.magic("notification", () => notification);
    Alpine.magic("clipboard", () => clipboard);

    Alpine.store("breakpoints", breakpoints);
    Alpine.store("global", store);

    Alpine.data("usePopper", usePopper);
    Alpine.data("accordionItem", accordionItem);
});
