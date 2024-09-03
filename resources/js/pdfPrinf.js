import html2canvas from "html2canvas";
import { jsPDF } from "jspdf";

var doc = new jsPDF("p", "pt", "a4");
var elements = document.getElementsByClassName("trackings-box");
var promises = [];

Array.prototype.forEach.call(elements, function (element, index) {
    promises.push(
        html2canvas(element, { scale: 2 }).then(function (canvas) {
            var imgData = canvas.toDataURL("image/jpeg", 0.5); // 0.75 indicates 75% quality
            var imgWidth = 595.28;
            var pageHeight = 841.89;
            var imgHeight = (canvas.height * imgWidth) / canvas.width;
            var heightLeft = imgHeight;
            var position = 0;

            if (index > 0) {
                doc.addPage();
            }

            doc.addImage(imgData, "PNG", 0, position, imgWidth, imgHeight);
            heightLeft -= pageHeight;

            while (heightLeft >= 0) {
                position = heightLeft - imgHeight;
                doc.addPage();
                doc.addImage(imgData, "PNG", 0, position, imgWidth, imgHeight);
                heightLeft -= pageHeight;
            }
        }),
    );
});

Promise.all(promises).then(function () {
    doc.save("tracking-lebels.pdf");
});
