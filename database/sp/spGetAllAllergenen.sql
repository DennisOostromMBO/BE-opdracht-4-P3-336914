DELIMITER //

CREATE PROCEDURE spGetAllAllergenen()
BEGIN
    SELECT 
        p.Id AS Id,
        p.Naam AS ProductNaam,
        a.Naam AS AllergeenNaam,
        a.Omschrijving AS AllergeenOmschrijving,
        m.AantalAanwezig
    FROM 
        product p
    INNER JOIN 
        productperallergeen pa ON p.Id = pa.ProductId
    INNER JOIN 
        allergeen a ON pa.AllergeenId = a.Id
    INNER JOIN 
        magazijn m ON p.Id = m.ProductId
    ORDER BY 
        p.Naam ASC;
END //

DELIMITER ;